<?php

namespace App\Controllers;

class InsertSex extends BaseController
{

    public function viewSexAndAge($sex, $age) 
    {
        if ($age >= 18)
        {
            echo $sex ." | ". $age. " | " . "Legal Age";
        }
        else 
        {
            echo $sex ." | ". $age . " | " . "Not Legal Age";
        }
    }
}
