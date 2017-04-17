<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 14.01.17
 * Time: 17:33
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Tax;

class QuarterReportType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quarters', ChoiceType::class,
                [
                    'choices' => $options['available_quarters'],
                    'label' => 'Квартал'
                ]
            )
            ->add('submit', SubmitType::class, [
                'label' => 'Подтвердить'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Tax::class,]);
        $resolver->setRequired('available_quarters');
    }

}