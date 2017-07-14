<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfigurationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'matter',
                Type\TextType::class,
                [
                    'label' => 'rocsann.configuration.matter',
                ]
            )
            ->add(
                'colour',
                Type\TextType::class,
                [
                    'label' => 'rocsann.configuration.colour',
                ]
            )
            ->add(
                'border',
                Type\TextType::class,
                [
                    'label' => 'rocsann.configuration.border',
                ]
            )
            ->add(
                'braid',
                Type\TextType::class,
                [
                    'label' => 'rocsann.configuration.braid',
                ]
            )
            ->add(
                'fringe',
                Type\TextType::class,
                [
                    'label' => 'rocsann.configuration.fringe',
                ]
            )
            ->add(
                'embroidery',
                Type\TextType::class,
                [
                    'label' => 'rocsann.configuration.embroidery',
                ]
            )
            ->add(
                'accessories',
                AccessoriesType::class,
                []
            )
        ;

        if ($options['customized']) {
            $builder->add(
                'size',
                Type\TextType::class,
                [
                    'label' => 'rocsann.configuration.size',
                ]
            )
            ->add(
                'logo',
                Type\FileType::class,
                [
                    'label' => 'rocsann.configuration.logo',
                ]
            );
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\\Entity\\Configuration',
            'customized' => false,
        ]);
    }
}
