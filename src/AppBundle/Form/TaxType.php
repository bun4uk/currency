<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 14.01.17
 * Time: 17:33
 */

namespace AppBundle\Form;

use AppBundle\AppBundle;
use AppBundle\Entity\Currency;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Service\CurrencyService;

use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Tax;

use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class TaxType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        /**
         * @var CurrencyService
         */
        $currencyService = $options['currency_service'];
        $builder
            ->add('sumHrn', NumberType::class)
            ->add('sumForeignCurrency', NumberType::class)
            ->add('currency', ChoiceType::class, [
                'choices' => $currencyService->getCurrencyChoices()
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                ])
            ->add('save', SubmitType::class, array('label' => 'Submit'))
//            ->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'setCurrency']);
        ;
    }

    /**
     * @param FormEvent $event
     */
    public function setCurrency (FormEvent $event) {
        $data = $event->getData();
        $currencyId = $data['currency'];
        $currencyRepository = $event->getForm()->getConfig()->getOption('currency_repository');
        $data['currency'] = $currencyRepository->findOneBy(['id' => $currencyId]);

        dump($data); die;

        $event->setData($data);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Tax::class,]);
        $resolver->setRequired('currency_service');
        $resolver->setRequired('currency_repository');
    }

}