<?php

namespace App\Http\Controllers\Ag;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
<<<<<<< HEAD
use PHPHtmlParser\Dom;
=======
>>>>>>> 7889e36d19e01ad88719f9535ced1f7ed51e488d

use Illuminate\Http\Request;

class IndexingModule extends Controller
{
    public function test(){
<<<<<<< HEAD


=======
>>>>>>> 7889e36d19e01ad88719f9535ced1f7ed51e488d
        $response = Http::withHeaders([
            'X-First' => 'foo',
            'X-Second' => 'bar'
        ])->get('http://google.com');

<<<<<<< HEAD
        $dom = new Dom();
//        $dom->setOptions(['removeScripts' => $r_scr]);

        $domi = $dom->loadStr($response->body());
        $domi = $domi->find('a')[0];
        dd($domi);
        return $domi;
=======
        return $response->status();
>>>>>>> 7889e36d19e01ad88719f9535ced1f7ed51e488d
    }
}
