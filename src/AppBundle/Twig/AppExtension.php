<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 18.03.17
 * Time: 21:33
 */

namespace AppBundle\Twig;


class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('quarter', [$this, 'quarterFilter']),
        );
    }

    public function quarterFilter(\DateTime $date)
    {
        $month =  $date->format('n');
        switch (true) {
            case ($month <= 3):
                return 'I';
            case ($month <= 6):
                return 'II';
            case ($month <= 9):
                return 'III';
            case ($month <= 12):
                return 'IV';
            default:
                return 'false';
        }
    }

}