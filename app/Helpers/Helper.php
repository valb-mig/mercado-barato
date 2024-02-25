<?php

namespace App\Helpers;

class Helper
{
    public static function getTimeGreetings() 
    {
        date_default_timezone_set('America/Sao_Paulo');

        $hora = date('H');

        if ($hora >= 6 && $hora < 12) {
            $timeGreeting = 'Bom dia';
        } elseif ($hora >= 12 && $hora < 18) {
            $timeGreeting = 'Boa tarde';
        } else {
            $timeGreeting = 'Boa noite';
        }

        return $timeGreeting;
    }
}