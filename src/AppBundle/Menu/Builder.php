<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
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
            'Produits',
            ['uri' => 'toto']
        );

        $menu->addChild(
            'Mon compte',
            ['uri' => 'tta']
        );

        return $menu;
    }
}
