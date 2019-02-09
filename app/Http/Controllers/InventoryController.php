<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Brand;
use Session;


class InventoryController extends Controller
{
    //store brand
    public function storeBrand(Request $request)
    {
    	$store = new Brand;

    	//$store->name = $request->brand_name;
    	$store::create(['name'=>$request->brand_name,'status'=>'active']);
    }
}
