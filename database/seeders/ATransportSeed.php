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
          'light', 'moto', 'water', 'special', 'trailer', 'еruck', 'bus', 'autohome', 'air', 'agro'
        ];
        foreach ($titles as $title){
            DB::table('a_transports')->insert([
                'title' => $title,
            ]);
        }

    }
}
