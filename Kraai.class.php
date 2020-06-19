<?php

include_once 'Dier.class.php';
include_once 'Vliegbrevet.class.php';

class Kraai extends Dier implements Vliegbrevet
{
    public function praat()
    {
        echo "Blub Blub!" . PHP_EOL;
    }

    public function vlieg()
    {
        echo "Liftoff... Flap Flap" . PHP_EOL;
    }
}
