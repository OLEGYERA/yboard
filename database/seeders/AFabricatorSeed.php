<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AFabricatorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            ['title' => "Austria",'rtitle' => "Австрия",'utitle' => "Австрія",'alias' => "austria",'old_val' => 40],
            ['title' => "England",'rtitle' => "Англия",'utitle' => "Англія",'alias' => "england",'old_val' => 826],
            ['title' => "Argentina",'rtitle' => "Аргентина",'utitle' => "Аргентина",'alias' => "argentina",'old_val' => 32],
            ['title' => "Belarus",'rtitle' => "Беларусь",'utitle' => "Білорусь",'alias' => "belarus",'old_val' => 112],
            ['title' => "Belgium",'rtitle' => "Бельгия",'utitle' => "Бельгія",'alias' => "belgium",'old_val' => 56],
            ['title' => "Bulgaria",'rtitle' => "Болгария",'utitle' => "Болгарія",'alias' => "bulgaria",'old_val' => 100],
            ['title' => "Brazil",'rtitle' => "Бразилия",'utitle' => "Бразилія",'alias' => "brazil",'old_val' => 76],
            ['title' => "Hungary",'rtitle' => "Венгрия",'utitle' => "Угорщина",'alias' => "hungary",'old_val' => 348],
            ['title' => "Germany",'rtitle' => "Германия",'utitle' => "Німеччина",'alias' => "germany",'old_val' => 276],
            ['title' => "Georgia",'rtitle' => "Грузия",'utitle' => "Грузія",'alias' => "georgia",'old_val' => 900],
            ['title' => "Denmark",'rtitle' => "Дания",'utitle' => "Данія",'alias' => "denmark",'old_val' => 208],
            ['title' => "India",'rtitle' => "Индия",'utitle' => "Індія",'alias' => "india",'old_val' => 356],
            ['title' => "Iran",'rtitle' => "Иран",'utitle' => "Іран",'alias' => "iran",'old_val' => 364],
            ['title' => "Ireland",'rtitle' => "Ирландия",'utitle' => "Ірландія",'alias' => "ireland",'old_val' => 901],
            ['title' => "Spain",'rtitle' => "Испания",'utitle' => "Іспанія",'alias' => "spain",'old_val' => 724],
            ['title' => "Italy",'rtitle' => "Италия",'utitle' => "Італія",'alias' => "italy", 'old_val' => 380],
            ['title' => "Kazakhstan",'rtitle' => "Казахстан",'utitle' => "Казахстан",'alias' => "kazakhstan",'old_val' => 398],
            ['title' => "Canada",'rtitle' => "Канада",'utitle' => "Канада",'alias' => "canada",'old_val' => 124],
            ['title' => "China",'rtitle' => "Китай",'utitle' => "Китай",'alias' => "china",'old_val' => 158],
            ['title' => "Korea",'rtitle' => "Корея",'utitle' => "Корея",'alias' => "korea",'old_val' => 408],
            ['title' => "Latvia",'rtitle' => "Латвия",'utitle' => "Латвія",'alias' => "latvia",'old_val' => 428],
            ['title' => "Lithuania",'rtitle' => "Литва",'utitle' => "Литва",'alias' => "lithuania",'old_val' => 440],
            ['title' => "Luxembourg",'rtitle' => "Люксембург",'utitle' => "Люксембург",'alias' => "luxembourg",'old_val' => 442],
            ['title' => "Malaysia",'rtitle' => "Малайзия",'utitle' => "Малайзія",'alias' => "malaysia",'old_val' => 458],
            ['title' => "Moldova",'rtitle' => "Молдова",'utitle' => "Молдова",'alias' => "moldova",'old_val' => 498],
            ['title' => "Netherlands",'rtitle' => "Нидерланды",'utitle' => "Нідерланди",'alias' => "netherlands",'old_val' => 528],
            ['title' => "Norway",'rtitle' => "Норвегия",'utitle' => "Норвегія",'alias' => "norway",'old_val' => 578],
            ['title' => "UAE",'rtitle' => "ОАЭ",'utitle' => "ОАЕ",'alias' => "uae",'old_val' => 902],
            ['title' => "Poland",'rtitle' => "Польша",'utitle' => "Польша",'alias' => "poland",'old_val' => 616],
            ['title' => "Portugal",'rtitle' => "Португалия",'utitle' => "Португалiя",'alias' => "portugal",'old_val' => 620],
            ['title' => "Russia",'rtitle' => "Россия",'utitle' => "Росія",'alias' => "russia",'old_val' => 643],
            ['title' => "Romania",'rtitle' => "Румыния",'utitle' => "Румунія",'alias' => "romania",'old_val' => 642],
            ['title' => "Serbia",'rtitle' => "Сербия",'utitle' => "Сербія",'alias' => "serbia",'old_val' => 688],
            ['title' => "Slovakia",'rtitle' => "Словакия",'utitle' => "Словаччина",'alias' => "slovakia",'old_val' => 703],
            ['title' => "Slovenia",'rtitle' => "Словения",'utitle' => "Словенія",'alias' => "slovenia",'old_val' => 705],
            ['title' => "United States",'rtitle' => "США",'utitle' => "США",'alias' => "united-states",'old_val' => 840],
            ['title' => "Turkey",'rtitle' => "Турция",'utitle' => "Туреччина",'alias' => "turkey",'old_val' => 792],
            ['title' => "Uzbekistan",'rtitle' => "Узбекистан",'utitle' => "Узбекистан",'alias' => "uzbekistan",'old_val' => 860],
            ['title' => "Ukraine",'rtitle' => "Украина",'utitle' => "Україна",'alias' => "ukraine", 'old_val' => 804],
            ['title' => "Finland",'rtitle' => "Финляндия",'utitle' => "Фінляндія",'alias' => "finland",'old_val' => 246],
            ['title' => "France",'rtitle' => "Франция",'utitle' => "Франция",'alias' => "france",'old_val' => 250],
            ['title' => "Czech Republic",'rtitle' => "Чехия",'utitle' => "Чехія",'alias' => "czech-republic",'old_val' => 203],
            ['title' => "Switzerland",'rtitle' => "Швейцария",'utitle' => "Швейцарія",'alias' => "switzerland", 'old_val' => 756],
            ['title' => "Sweden",'rtitle' => "Швеция",'utitle' => "Швеція",'alias' => "sweden", 'old_val' => 752],
            ['title' => "Estonia",'rtitle' => "Эстония",'utitle' => "Естонія",'alias' => "estonia",'old_val' => 233],
            ['title' => "Japan",'rtitle' => "Япония",'utitle' => "Японія",'alias' => "japan",'old_val' => 392]
        ];

        foreach ($titles as $title){
            DB::table('a_fabricators')->insert($title);
        }
    }
}
