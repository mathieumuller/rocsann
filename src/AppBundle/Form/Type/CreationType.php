<?php

namespace AppBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use SaleBundle\Form\Type\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'photoFile',
                Type\FileType::class,
                [
                    'label' => 'rocsann.creation.photo',
                    'required' => false,
                ]
            )
            ->add(
                'diaporama',
                Type\CheckboxType::class,
                [
                    'label' => 'rocsann.creation.diaporama',
                    'required' => false,
                ]
            )
            ->add(
                'description',
                Type\TextareaType::class,
                [
                    'label' => 'rocsann.creation.description',
                    'attr' => ['placeholder' => 'Entrez un texte libre de description du produit'],
                    'required' => false,
                ]
            )
            ->add(
                'form',
                EntityType::class,
                [
                    'class' => 'AppBundle:Form',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('f')
                            ->orderBy('f.label', 'ASC')
                        ;
                    },
                    'choice_label' => 'label',
                    'label' => 'rocsann.creation.form',
                    'placeholder' => 'rocsann.creation.placeholder.form',
                ]
            )
            ->add(
                'category',
                EntityType::class,
                [
                    'class' => 'AppBundle:Category',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.label', 'ASC')
                        ;
                    },
                    'choice_label' => 'label',
                    'label' => 'rocsann.creation.category',
                    'placeholder' => 'rocsann.creation.placeholder.category',
                ]
            )
            ->add(
                'configuration',
                ConfigurationType::class,
                [
                    'label' => false,
                ]
            )
            ->add(
                'submit',
                Type\SubmitType::class,
                [
                    'label' => 'submit',
                    'attr' => ['class' => 'btn right'],
                ]
            )
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\\Entity\\Creation',
        ]);
    }

    public function getParent()
    {
        return ProductType::class;
    }
}
