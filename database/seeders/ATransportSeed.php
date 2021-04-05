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
            ["title" => "Water transport","rtitle" => "Водный транспорт","utitle" => "Водний транспорт","alias" => "water_transport"],
            ["title" => "Special equipment","rtitle" => "Спецтехника","utitle" => "Спецтехніка","alias" => "special-equipment"],
            ["title" => "Trailer","rtitle" => "Прицепы","utitle" => "Причепи","alias" => "trailer"],
            ["title" => "Lorry","rtitle" => "Грузовики","utitle" => "Вантажівки","alias" => "lorry"],
            ["title" => "Bus","rtitle" => "Автобусы","utitle" => "Автобуси","alias" => "bus"],
            ["title" => "Autodoma","rtitle" => "Автодома","utitle" => "Автобудинки","alias" => "autodom"],
            ["title" => "Air transport","rtitle" => "Воздушный транспорт","utitle" => "Повітряний транспорт","alias" => "air-transport"],
            ["title" => "Agricultural machinery","rtitle" => "Сельхозтехника","utitle" => "Сільгосптехніка","alias" => "agricultural-machinery"]
        ];
        foreach ($titles as $title){
            DB::table('a_transports')->insert($title);
        }

    }
}
