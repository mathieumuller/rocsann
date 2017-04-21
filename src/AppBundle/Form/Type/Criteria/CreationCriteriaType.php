<?php

namespace AppBundle\Form\Type\Criteria;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;

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
                'categorie',
                EntityType::class,
                [
                    'label' => 'labels.form.categorie',
                    'class' => 'AppBundle\Entity\Categorie',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.libelle', 'ASC');
                    },
                    'required' => false,
                ]
            )
            ->add(
                'forme',
                EntityType::class,
                [
                    'label' => 'labels.form.forme',
                    'class' => 'AppBundle\Entity\Forme',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('f')
                            ->orderBy('f.libelle', 'ASC');
                    },
                    'required' => false,
                ]
            )
            ->add(
                'matiere',
                Type\ChoiceType::class,
                [
                    'label' => 'labels.form.matiere',
                    'choices' => $options['matieres'],
                    'required' => false,
                ]
            )
            ->add(
                'sort',
                Type\HiddenType::class
            )
            ->add(
                'search',
                Type\SubmitType::class,
                [
                    'label' => 'search',
                    'attr' => [
                        'class' => 'btn-floating waves-effect waves-light grey right',
                        'icon' => 'search',
                    ],
                ]
            )
            /*->add(
                'dateFrom',
                Type\DateType::class,
                [
                    'label' => 'generics.date_range',
                    'required' => false,
                    'range' => true,
                ]
            )
            ->add(
                'dateTo',
                Type\DateType::class,
                [
                    'label' => 'generics.date_range',
                    'required' => false,
                    'range' => true,
                ]
            )
            ->add(
                'levels',
                EntityType::class,
                [
                    'label' => 'main.levels',
                    'class' => 'CoreBundle\Entity\Level',
                    'multiple' => true,
                    'attr' => [
                        'data-actions-box' => true,
                    ],
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.id', 'DESC');
                    },
                    'selectpicker' => [
                        'max_size' => 10,
                        'width' => '100%',
                        'placeholder' => 'placeholder.all_levels',
                    ],
                    'required' => false,
                ]
            )
            ->add(
                'pageLength',
                Type\HiddenType::class,
                ['attr' => ['class' => 'page-length']]
            )
            ->add(
                'entryRequests',
                Type\HiddenType::class
            )
            ->add(
                'sort',
                Type\HiddenType::class,
                ['attr' => ['class' => 'sort-value']]
            )*/
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => 'AppBundle\\Model\\Criteria\\CreationCriteria',
                'csrf_token_id' => 'creations_criteria',
                'method' => 'GET',
                'matieres' => [],
            ]
        );
    }
}
