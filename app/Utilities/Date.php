<?php

    namespace App\Utilities;

    class Date
    {
        public static function Date(){
            return (new \DateTime)->format('d-m-Y');
        }
    }