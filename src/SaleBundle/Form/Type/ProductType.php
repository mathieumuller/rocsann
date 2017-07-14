<?php

namespace SaleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'reference',
                Type\TextType::class,
                [
                    'label' => 'sale.product.reference',
                ]
            )
            ->add(
                'label',
                Type\TextType::class,
                [
                    'label' => 'sale.product.label',
                ]
            )
            ->add(
                'price',
                Type\MoneyType::class,
                [
                    'label' => 'sale.product.price',
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
            'data_class' => 'SaleBundle\\Model\\ProductInterface',
        ]);
    }
}
