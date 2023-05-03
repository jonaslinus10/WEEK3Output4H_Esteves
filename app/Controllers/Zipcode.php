<?php

namespace App\Controllers;

class Zipcode extends BaseController
{

    public function displayZip($zip) 
    {
        $zipCityAvailable = [
            '4100' => 'Cavite City',
            '4101' => 'Sangley Point Naval Base',
            '4104' => 'Kawit, Cavite',
            '4105' => 'Noveleta, Cavite',
            '4106' => 'Rosario, Cavite',
                            ];

        if (isset($zipCityAvailable[$zip])) 
        {
            return $zipCityAvailable[$zip];
        } 
        else 
        {
            return 'Invalid Zip/No Zip Available';
        }
    }

}