<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use AppBundle\Entity;

class MigrateDatabaseCommand extends ContainerAwareCommand
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

        $this->importCreations();
        //$this->importUsers();
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

            // Create the category if not exists
            if (!$category = $this->em->getRepository('AppBundle:Category')->findOneByLabel($libType)) {
                $category = new Entity\Category();
                $category->setLabel($libType)
                    ->setCode(uniqid())
                ;
                $this->em->persist($category);
            }

            // Create the forme if not exists
            if (!$forme = $this->em->getRepository('AppBundle:Form')->findOneByLabel($libForme)) {
                $forme = new Entity\Form();
                $forme->setLabel($libForme);
                $this->em->persist($forme);
            }

            //Create the creation configuration
            $configuration = new Entity\Configuration();
            $configuration->setMatter($crea->getMatiere())
                ->setColour($crea->getCouleur())
                ->setBorder($crea->getBordure())
                ->setBraid($crea->getGalon())
                ->setFringe($crea->getFrange())
                ->setEmbroidery($crea->getBroderie())
                ->setSize('Cheval')
            ;

            foreach ($crea->getIdaccess() as $accessoire) {
                if (!$accessory = $this->em->getRepository('AppBundle:Accessory')->findOneByLabel($accessoire->getLibaccess())) {
                    $accessory = new Entity\Accessory();
                    $accessory->setLabel($accessoire->getLibAccess());
                    $this->em->persist($accessory);
                }

                $configuration->addAccessory($accessory);
            }

            $this->em->persist($configuration);

            $creation->setPrice($crea->getPrix())
                ->setCategory($category)
                ->setForm($forme)
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
