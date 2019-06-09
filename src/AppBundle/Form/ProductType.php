<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Manufacturer;
use AppBundle\Entity\TaxClass;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('model')
        ->add('sku')
        ->add('quantity')
        ->add('stockStatusId', ChoiceType::class, [
            'choices'  => [
                'Choose an option' => '',
                'Yes' => 1,
                'No' => 0,
            ],
        ])
        ->add('image')
        ->add('manufacturerId', EntityType::class, [
            'class' => Manufacturer::class,
            'choice_label' => 'name',
            'placeholder' => 'Choose an option',
        ])
        ->add('shipping')
        ->add('price')
        ->add('taxClassId', EntityType::class, [
            'class' => TaxClass::class,
            'choice_label' => 'name',
            'placeholder' => 'Choose an option',
        ])
        ->add('dateAvailable')
        ->add('minimum')
        ->add('sortOrder')
        ->add('status')
        ->add('viewed')
        ->add('dateAdded')
        ->add('dateModified');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_product';
    }


}
