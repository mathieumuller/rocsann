<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use AppBundle\Entity;

class UpdateDatabaseCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('rocsann:db:init')
            ->setDescription('create an ANR, ARE or ASL association')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $em = $this->getContainer()->get('doctrine')->getManager();

        $io->section('Import des créations');
        $oldCreations = $em->getRepository('AppBundle:Crea')->findAll();
        $io->progressStart(count($oldCreations));

        foreach ($oldCreations as $crea) {
            $creation = new Entity\Creation();
            $produit = $crea->getIdproduit();
            $libType = $produit->getLibtype();
            $libForme = $produit->getLibforme();

            // Create the categorie if not exists
            if (!$categorie = $em->getRepository('AppBundle:Categorie')->findOneByLibelle($libType)) {
                $categorie = new Entity\Categorie();
                $categorie->setLibelle($libType)
                    ->setCode(uniqid())
                ;
                $em->persist($categorie);
            }

            // Create the forme if not exists
            if (!$forme = $em->getRepository('AppBundle:Forme')->findOneByLibelle($libForme)) {
                $forme = new Entity\Forme();
                $forme->setLibelle($libForme);
                $em->persist($forme);
            }

            //Create the creation configuration
            $configuration = new Entity\Configuration();
            $configuration->setMatiere($crea->getMatiere())
                ->setCouleur($crea->getCouleur())
                ->setBordure($crea->getBordure())
                ->setGalon($crea->getGalon())
                ->setFrange($crea->getFrange())
                ->setBroderie($crea->getBroderie())
                ->setTaille('Cheval')
            ;

            foreach ($crea->getIdaccess() as $accessoire) {
                if (!$agrement = $em->getRepository('AppBundle:Agrement')->findOneByLibelle($accessoire->getLibaccess())) {
                    $agrement = new Entity\Agrement();
                    $agrement->setLibelle($accessoire->getLibAccess());
                    $em->persist($agrement);
                }

                $configuration->addAgrement($agrement);
            }

            $em->persist($configuration);

            $creation->setPrix($crea->getPrix())
                ->setCategorie($categorie)
                ->setForme($forme)
                ->setConfiguration($configuration)
                ->setPhoto($crea->getPhoto())
                ->setDiaporama($crea->getDiapo())
            ;

            $em->persist($creation);
            $em->flush();

            $io->progressAdvance();
        }

        $io->progressFinish();

        $io->success(count($oldCreations).' créations importées');
    }
}
