<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use AppBundle\Entity\User;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $menu = $factory->createItem(
            'root'
        );

        $menu->addChild(
            'Accueil',
            [
                'route' => 'homepage',
            ]
        );

        $menu->addChild(
            'Créations',
            ['route' => 'creations_list']
        );

        $menu->addChild(
            'Mon compte',
            ['uri' => 'tta']
        );

        $menu->addChild(
            'Mon compte',
            ['uri' => 'tta']
        );

        if ($user instanceof User) {
            $menu->addChild(
                'Logout',
                ['uri' => 'logout']
            );
        } else {
            $menu->addChild(
                'Login',
                ['route' => 'login']
            );
        }

        return $menu;
    }
}
