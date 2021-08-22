<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function list($id=null) {
        return $id? Shop::find($id):Shop::all();  
    }

    function add(Request $req){
        $shop = new Shop;
        $shop->title = $req->title;
        $shop->description = $req->description;
        $result = $shop->save();

        if($result) {
            return ['Result' => 'success'];
        } else {
            return ['Result' => 'success'];

        }
    }
}
