<?php

namespace App\Http\Controllers\Ag;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class IndexingModule extends Controller
{
    public function test(){
        $response = Http::withHeaders([
            'X-First' => 'foo',
            'X-Second' => 'bar'
        ])->get('http://google.com');

        return $response->status();
    }
}
