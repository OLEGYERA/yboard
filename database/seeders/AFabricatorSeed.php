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
            ['title' => 'Австрия', 'old_val' => 40],
            ['title' => 'Англия', 'old_val' => 826],
            ['title' => 'Аргентина', 'old_val' => 32],
            ['title' => 'Беларусь', 'old_val' => 112],
            ['title' => 'Бельгия', 'old_val' => 56],
            ['title' => 'Болгария', 'old_val' => 100],
            ['title' => 'Бразилия', 'old_val' => 76],
            ['title' => 'Венгрия', 'old_val' => 348],
            ['title' => 'Германия', 'old_val' => 276],
            ['title' => 'Грузия', 'old_val' => 900],
            ['title' => 'Дания', 'old_val' => 208],
            ['title' => 'Индия', 'old_val' => 356],
            ['title' => 'Иран', 'old_val' => 364],
            ['title' => 'Ирландия', 'old_val' => 901],
            ['title' => 'Испания', 'old_val' => 724],
            ['title' => 'Италия', 'old_val' => 380],
            ['title' => 'Казахстан', 'old_val' => 398],
            ['title' => 'Канада', 'old_val' => 124],
            ['title' => 'Китай', 'old_val' => 158],
            ['title' => 'Корея', 'old_val' => 408],
            ['title' => 'Латвия', 'old_val' => 428],
            ['title' => 'Литва', 'old_val' => 440],
            ['title' => 'Люксембург', 'old_val' => 442],
            ['title' => 'Малайзия', 'old_val' => 458],
            ['title' => 'Молдова', 'old_val' => 498],
            ['title' => 'Нидерланды', 'old_val' => 528],
            ['title' => 'Норвегия', 'old_val' => 578],
            ['title' => 'ОАЭ', 'old_val' => 902],
            ['title' => 'Польша', 'old_val' => 616],
            ['title' => 'Португалия', 'old_val' => 620],
            ['title' => 'Россия', 'old_val' => 643],
            ['title' => 'Румыния', 'old_val' => 642],
            ['title' => 'Сербия', 'old_val' => 688],
            ['title' => 'Словакия', 'old_val' => 703],
            ['title' => 'Словения', 'old_val' => 705],
            ['title' => 'США', 'old_val' => 840],
            ['title' => 'Турция', 'old_val' => 792],
            ['title' => 'Узбекистан', 'old_val' => 860],
            ['title' => 'Украина', 'old_val' => 804],
            ['title' => 'Финляндия', 'old_val' => 246],
            ['title' => 'Франция', 'old_val' => 250],
            ['title' => 'Чехия', 'old_val' => 203],
            ['title' => 'Швейцария', 'old_val' => 756],
            ['title' => 'Швеция', 'old_val' => 752],
            ['title' => 'Эстония', 'old_val' => 233],
            ['title' => 'Япония', 'old_val' => 392]
        ];

        foreach ($titles as $title){
            DB::table('a_fabricators')->insert($title);
        }
    }
}
