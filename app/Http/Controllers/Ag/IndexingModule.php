<?php

namespace App\Http\Controllers\Ag;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use PHPHtmlParser\Dom;

use Illuminate\Http\Request;

class IndexingModule extends Controller
{
    public function test(){


        $response = Http::withHeaders([
            'X-First' => 'foo',
            'X-Second' => 'bar'
        ])->get('http://google.com');

        $dom = new Dom();
//        $dom->setOptions(['removeScripts' => $r_scr]);

        $domi = $dom->loadStr($response->body());
        $domi = $domi->find('a')[0];
        dd($domi);
        return $domi;
    }
}
