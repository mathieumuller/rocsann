<?php

namespace AppBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccessoriesType extends AbstractType
{
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'entry_type' => EntityType::class,
            'entry_options' => [
                'class' => 'AppBundle:Accessory',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->orderBy('a.label', 'ASC')
                    ;
                },
                'choice_label' => 'label',
                'label' => false,
            ],
            'label' => false,
            'allow_add' => true,
            'allow_delete' => true,
        ]);
    }

    public function getParent()
    {
        return CollectionType::class;
    }
}
