<?php

namespace AppBundle\Form\Type\Criteria;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreationCriteriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'diaporama',
                Type\CheckboxType::class,
                [
                    'label' => 'rocsann.creation.is_diaporama',
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
                    'required' => false,
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
                    'required' => false,
                ]
            )
            ->add(
                'accessories',
                EntityType::class,
                [
                    'class' => 'AppBundle:Category',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('a')
                            ->orderBy('a.label', 'ASC')
                        ;
                    },
                    'multiple' => true,
                    'choice_label' => 'label',
                    'label' => 'rocsann.creation.accessories',
                    'placeholder' => 'rocsann.creation.placeholder.accessories',
                    'required' => false,
                ]
            )
            ->add(
                'reference',
                Type\TextType::class,
                [
                    'label' => 'rocsann.creation.reference',
                    'attr' => ['placeholder' => 'rocsann.criteria.placeholder.reference'],
                    'required' => false,
                ]
            )
            ->add(
                'label',
                Type\TextType::class,
                [
                    'label' => 'rocsann.creation.reference',
                    'attr' => ['placeholder' => 'rocsann.criteria.placeholder.reference'],
                    'required' => false,
                ]
            )
            ->add(
                'matter',
                Type\TextType::class,
                [
                    'label' => 'rocsann.creation.matter',
                    'attr' => ['placeholder' => 'rocsann.criteria.placeholder.matter'],
                    'required' => false,
                ]
            )
            ->add(
                'embroidery',
                Type\TextType::class,
                [
                    'label' => 'rocsann.creation.embroidery',
                    'attr' => ['placeholder' => 'rocsann.criteria.placeholder.embroidery'],
                    'required' => false,
                ]
            )
            ->add(
                'fringe',
                Type\TextType::class,
                [
                    'label' => 'rocsann.creation.fringe',
                    'attr' => ['placeholder' => 'rocsann.criteria.placeholder.fringe'],
                    'required' => false,
                ]
            )
            ->add(
                'braid',
                Type\TextType::class,
                [
                    'label' => 'rocsann.creation.braid',
                    'attr' => ['placeholder' => 'rocsann.criteria.placeholder.braid'],
                    'required' => false,
                ]
            )
            ->add(
                'search',
                Type\SubmitType::class,
                [
                    'label' => 'search',
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
            'data_class' => 'AppBundle\\Model\\Criteria\\CreationCriteria',
        ]);
    }
}
