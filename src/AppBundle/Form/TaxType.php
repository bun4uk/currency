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
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
        $builder
            ->add('paymentSum', NumberType::class, [
//                'attr' => [
//                    'type' => 'email'
//                ]
            ])
            ->add('currency', EntityType::class, [
                'class' => 'AppBundle:Currency',
                'choice_label' => 'name',
                'label' => 'Валюта',
            ])
            ->add(
            // I hope it will be refactored when all browsers will support DateType inputs
                'date',
                TextType::class,
                [
                    'label' => 'Дата',
//                    'widget' => 'single_text',
//                    'format' => 'yyyy-MM-dd',
                ]
            )
            ->add('save', SubmitType::class, array('label' => 'Submit'))
//            ->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'sumForeignCurrencyEventListener'])
            ->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'setDateObject']);
//            ->addEventListener(FormEvents::POST_SUBMIT, [$this, 'setCurrency']);
    }

    /**
     * @param FormEvent $event
     * @return bool
     */
    public function sumForeignCurrencyEventListener(FormEvent $event): bool
    {
        $data = $event->getData();
        if ($data['sumForeignCurrency']) {
            return false;
        }

        $event->setData(array_replace(
                $data,
                ['sumForeignCurrency' => 0]
            )
        );

        return true;
    }

    /**
     * @param FormEvent $event
     * @return bool
     */
    public function setDateObject(FormEvent $event): bool
    {
        $data = $event->getData();
        if (is_numeric($data['paymentSum'])) {
            $event->setData(array_replace(
                    $data,
                    ['date' => \DateTime::createFromFormat('Y-m-d', $data['date'])]
                )
            );
        }

        return true;
    }

    /**
     * @param FormEvent $event
     */
    public function setCurrency(FormEvent $event): void
    {
        $data = $event->getData();
//        dump($data); die;
        $currencyId = $data['currency'];
        $currencyRepository = $event->getForm()->getConfig()->getOption('currency_repository');
        $data['currency'] = $currencyRepository->findOneBy(['id' => $currencyId]);
        $event->setData($data);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Tax::class,]);
        $resolver->setRequired('currency_service');
        $resolver->setRequired('currency_repository');
    }

}