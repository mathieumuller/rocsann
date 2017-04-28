<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use AppBundle\Entity;

class UpdateDatabaseCommand extends ContainerAwareCommand
{
    private $em;
    private $io;

    protected function configure()
    {
        $this
            ->setName('rocsann:db:init')
            ->setDescription('create an ANR, ARE or ASL association')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->io = new SymfonyStyle($input, $output);
        $this->em = $this->getContainer()->get('doctrine')->getManager();

        // $this->importCreations();
        $this->importUsers();
    }

    private function importCreations()
    {
        $this->io->section('Import des créations');
        $oldCreations = $this->em->getRepository('AppBundle:Crea')->findAll();
        $this->io->progressStart(count($oldCreations));

        foreach ($oldCreations as $crea) {
            $creation = new Entity\Creation();
            $produit = $crea->getIdproduit();
            $libType = $produit->getLibtype();
            $libForme = $produit->getLibforme();

            // Create the categorie if not exists
            if (!$categorie = $this->em->getRepository('AppBundle:Categorie')->findOneByLibelle($libType)) {
                $categorie = new Entity\Categorie();
                $categorie->setLibelle($libType)
                    ->setCode(uniqid())
                ;
                $this->em->persist($categorie);
            }

            // Create the forme if not exists
            if (!$forme = $this->em->getRepository('AppBundle:Forme')->findOneByLibelle($libForme)) {
                $forme = new Entity\Forme();
                $forme->setLibelle($libForme);
                $this->em->persist($forme);
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
                if (!$agrement = $this->em->getRepository('AppBundle:Agrement')->findOneByLibelle($accessoire->getLibaccess())) {
                    $agrement = new Entity\Agrement();
                    $agrement->setLibelle($accessoire->getLibAccess());
                    $this->em->persist($agrement);
                }

                $configuration->addAgrement($agrement);
            }

            $this->em->persist($configuration);

            $creation->setPrix($crea->getPrix())
                ->setCategorie($categorie)
                ->setForme($forme)
                ->setConfiguration($configuration)
                ->setPhoto($crea->getPhoto())
                ->setDiaporama($crea->getDiapo())
            ;

            $this->em->persist($creation);
            $this->em->flush();

            $this->io->progressAdvance();
        }

        $this->io->progressFinish();

        $this->io->success(count($oldCreations).' créations importées');
    }

    private function importUsers()
    {
        $this->io->section('Import des utilisateurs');
        $oldUsers = $this->em->getRepository('AppBundle:Utilisateur')->findAll();
        $this->io->progressStart(count($oldUsers));

        foreach ($oldUsers as $oldUser) {
            $user = new Entity\User();

            $user->setId($oldUser->getIdutil())
                ->setLastname($oldUser->getNomutil())
                ->setFirstname($oldUser->getPrenutil())
                ->setPreviousPassword($oldUser->getPassutil())
                ->setEmail($oldUser->getMailutil())
                ->setUsername($oldUser->getPrenutil().$oldUser->getIdutil())
                ->setAddress($oldUser->getVoieutil())
                ->setZipCode($oldUser->getCputil())
                ->setCity($oldUser->getCommuneutil())
                ->setCountry($oldUser->getPaysutil())
                ->setNewsLetter($oldUser->getNews())
                ->setRoles(['ROLE_USER'])
            ;

            $plainPassword = 'password';
            $encoder = $this->getContainer()->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $plainPassword);
            $user->setPassword($encoded);

            $this->em->persist($user);

            // REMOVE LATER
            $this->em->flush();
            //
            //
            $this->io->progressAdvance();
        }

        $this->em->flush();
        $this->io->progressFinish();

        $this->io->success(count($oldUsers).' utilisateurs importées');
    }
}
