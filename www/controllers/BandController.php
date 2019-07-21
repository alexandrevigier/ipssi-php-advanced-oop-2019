<?php
declare(strict_types = 1);

namespace controllers;
class BandController
{
    /**
     * @throws \Exception
     */
    public function defaultAction(){
        $tabBand = array(
            "1"=>"Metal Candor",
            "2"=>"Convulsive Death",
            "3"=>"Obedient Civilization",
            "4"=>"Weasel Among Mouth",
            "5"=>"Greenery Of The Fred",
            "6"=>"Gladiator Of The Monster",
        );
        $tabMember = array(
            "1"=>"Kristen Ottosen",
            "2"=>"Linda Homstad",
            "3"=>"Asle Aleksandersen",
            "4"=>"Jenny Tjessem",
            "5"=>"Vivian Wahlberg",
            "6"=>"Aslak Nordholm",
            "7"=>"Maren Gyldenlove",
            "8"=>"Anton Mickelsen",
        );
        $tabInstrument = array(
            "1"=>"Guitare électrique",
            "2"=>"Batterie",
            "3"=>"Microphone",
            "4"=>"clavier",
            "5"=>"piano",
            "6"=>"accordéon"
        );
        for ($x=0; $x<=6; $x++){
            $randBand = rand(1,6);
            $randMember = rand(1,8);
            $randInstrument = rand(1,6);
            $tabFinale[] = array("Member" => $tabMember[$randMember],
                "Band" => $tabBand[$randBand],"Instrument" => $tabInstrument[$randInstrument]);
        }
        require ('views/Band.php');
    }
}