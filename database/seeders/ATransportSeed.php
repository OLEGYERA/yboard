<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ATransportSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $titles = [
            ["title" => "Auto","rtitle" => "Легковые автомобили","utitle" => "Легкові автомобілі","alias" => "auto"],
            ["title" => "Moto","rtitle" => "Мотоциклы","utitle" => "Мотоцикли","alias" => "moto"],
            ["title" => "Special equipment","rtitle" => "Спецтехника","utitle" => "Спецтехніка","alias" => "special-equipment"],
            ["title" => "Water transport","rtitle" => "Водный транспорт","utitle" => "Водний транспорт","alias" => "water_transport"],
            ["title" => "Trailer","rtitle" => "Прицепы","utitle" => "Причепи","alias" => "trailer"],
            ["title" => "Lorry","rtitle" => "Грузовики","utitle" => "Вантажівки","alias" => "lorry"],
            ["title" => "Bus","rtitle" => "Автобусы","utitle" => "Автобуси","alias" => "bus"],
            ["title" => "Autodoma","rtitle" => "Автодома","utitle" => "Автобудинки","alias" => "autodom"]
        ];
        foreach ($titles as $title){
            DB::table('a_transports')->insert($title);
        }

    }
}
