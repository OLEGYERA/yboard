<?php

namespace App\Http\Controllers\Ag;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use PHPHtmlParser\Dom;

use App\Models\Auto\ATransport;
use App\Models\Auto\AFabricator;
use App\Models\Auto\ABrand;
use App\Models\Auto\ABrandPivotTransport;
use App\Models\Auto\AModel;
use App\Models\Auto\ABody;



class StockModule extends Controller
{
    private $serviceAutoURL = "https://auto.ria.com/";
    private $headers = [
        'user-agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
    ];

    public function renderAutoBasicData(){
//        $this->renderATransport_with_pivot();
//        $this->renderAModel_with_pivot_ATransport_with_pivot();
        $this->renderAbody_with_pivot();
        return true;
    }

    protected function renderATransport_with_pivot(){
        foreach (ATransport::all() as $transport_item){
            $response = Http::withHeaders($this->headers)
                ->get($this->serviceAutoURL . 'demo/api/categories/'.$transport_item->id.'/marks/_with_country?langId=2');


            foreach ($response->json() as $new_brand){
                $brand_Is_set = ABrand::where('title', $new_brand['name'])->first();
                if($brand_Is_set){
                    (new ABrandPivotTransport)->create([
                        'transport_id' => $transport_item->id,
                        'brand_id' => $brand_Is_set->id,
                    ]);
                } else{
                    $fabricator_id = AFabricator::where('old_val', $new_brand['country'])->first();
                    $brand_Is_set_how_alias = ABrand::where('alias', generator_alias(mb_strtolower($new_brand['name'])))->first();
                    $new_brand = (new ABrand)->create([
                        'title' => $new_brand['name'],
                        'alias' => generator_alias(mb_strtolower($new_brand['name'])) . ($brand_Is_set_how_alias ? '-1' : ''),
                        'old_val' => $new_brand['value'],
                        'fabricator_id' => $fabricator_id ? $fabricator_id->id : null
                    ]);

                    (new ABrandPivotTransport)->create([
                        'transport_id' => $transport_item->id,
                        'brand_id' => $new_brand->id,
                    ]);
                }
            }
        }
        return true;
    }

    protected function renderAModel_with_pivot_ATransport_with_pivot(){
        foreach (ABrandPivotTransport::all() as $bpt){
            $brand_obj = ABrand::find($bpt->brand_id);
            $response = Http::withHeaders($this->headers)
                ->get($this->serviceAutoURL . 'api/categories/'.$bpt->transport_id.'/marks/'.$brand_obj->old_val.'/models/_with_count?langId=2');

            if(is_array($response->json())){
                foreach ($response->json() as $new_model){
                    $new_model_obj = new AModel();
                    $new_model_obj->title = $new_model['name'];
                    $new_model_obj->alias = generator_alias(mb_strtolower($new_model['name']));
                    $new_model_obj->old_val = $new_model['value'];
                    $new_model_obj->brand_pivot_transport_id = $bpt->id;
                    if($new_model['parentId'] != 0){
                        $parent_model_obj = AModel::where('old_val', $new_model['parentId'])->first();
                        $new_model_obj->parent_id = $parent_model_obj->id;
                    }
                    $new_model_obj->hasChild = $new_model['isGroup'];

                    $new_model_obj->save();
                }
            } else {
                echo $this->serviceAutoURL . 'api/categories/'.$bpt->transport_id.'/marks/'.$brand_obj->old_val.'/models/_with_count?langId=2' . '<br/>';
            }

        }
        return true;
    }

    protected function renderAbody_with_pivot(){
        foreach (ATransport::all() as $transport_item) {
            $response_ru = Http::withHeaders($this->headers)
                ->get($this->serviceAutoURL . 'api/categories/' . $transport_item->id . '/bodystyles?langId=2');
            $response_ua = Http::withHeaders($this->headers)
                ->get($this->serviceAutoURL . 'api/categories/' . $transport_item->id . '/bodystyles?langId=4');

            $body_arr = [];
            foreach ($response_ru->json() as $ru_body_obj){
                $body_arr[$ru_body_obj['value']]['ru'] = $ru_body_obj;
            }

            foreach ($response_ua->json() as $ua_body_obj){
                $body_arr[$ua_body_obj['value']]['ua'] = $ua_body_obj;
            }


            foreach ($body_arr as $new_body){
                if(!isset($new_body['ru'])){
                    // 199 - элемент, в ручном режиме занести "Бетономешалку"
                    (new ABody)->create([
                        'rtitle' => 'AAA',
                        'utitle' => $new_body['ua']['name'],
                        'alias' => generator_alias(mb_strtolower($new_body['ua']['name'])),
                        'transport_id' => $transport_item->id
                    ]);
                } else {
                    (new ABody)->create([
                        'rtitle' => $new_body['ru']['name'],
                        'utitle' => $new_body['ua']['name'],
                        'alias' => generator_alias(mb_strtolower($new_body['ru']['name'])),
                        'transport_id' => $transport_item->id
                    ]);
                }

            }
        }
        return true;
    }


}
