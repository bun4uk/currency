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

    public function getBitcoinPrice()
    {
        $service_url = "https://blockchain.info/ticker";
        $res = json_decode(file_get_contents($service_url), true);

        return $res;
    }

    public function getBitcoinPriceChart()
    {
        $service_url = "https://api.blockchain.info/charts/market-price?timespan=1year&rollingAverage=1days&format=json";
        $res = json_decode(file_get_contents($service_url), true);

        return $res;
    }

    /**
     * @param $currency
     * @param $date
     * @return array
     */
    public function getCurrencyRateToHryvna($currency, $date)
    {
        $service_url = "https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?valcode=$currency&date=$date&json";
        $result = json_decode(file_get_contents($service_url), true);

        return $result;
    }




    

}