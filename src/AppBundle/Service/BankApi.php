<?php
/**
 * Created by PhpStorm.
 * User: v.bunchuk
 * Date: 06/07/2016
 * Time: 18:09
 */

namespace AppBundle\Service;


class BankApi
{

    public function getPrivatCurrencyList()
    {
        $service_url = "https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=11";
        $res = json_decode(file_get_contents($service_url), true);

        return $res;
    }


    

}