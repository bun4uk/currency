<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 14.01.17
 * Time: 17:33
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Service\CurrencyService;

class TaxType extends AbstractType
{
    /**
     * @var array
     */
    private $currency = [];

    /**
     * @var CurrencyService
     */
    private $currencyService;

    /**
     * TaxType constructor.
     *
     * @param CurrencyService $currencyService
     */
    public function __construct()
    {
//        $this->currencyService = $currencyService;
//        $this->currency = $this->currencyService->getCurrencyChoices();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sumHrn', NumberType::class)
            ->add('sum', NumberType::class)
            ->add('currency', ChoiceType::class, [
                'choices' => [
                    'usd' => 'USD',
                    'euro' => 'EUR',
                    'rur' => 'RUB'
                ]
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                ])
            ->add('save', SubmitType::class, array('label' => 'Submit'))
        ;
    }

}