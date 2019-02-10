<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Brand;
use App\Category;
use App\Product;

use Session;


class InventoryController extends Controller
{
    //store brand
    public function storeBrand(Request $request)
    {
    	$store = new Brand;

    	//$store->name = $request->brand_name;
    	$store::create(
    		[
    			'name'=>$request->brand_name,
    			'status'=>'1'

    		]
    	);
    	return redirect()->back();
    }

    // store categories
    public function storeCategory(Request $request)
    {
    	$store = new Category;

    	$store::create(

    		[
    			'name' => $request->category_name,
    			'parent_category' => $request->parent_cat,
    			'status' => '1'

    		]
    	);

    	return redirect()->back();

    }

    // store products
    public function storeProduct(Request $request)
    {
    	$product = new Product;

    	$category = DB::table('categories')->where('name',$request->category_name)->first();

    	$brand = DB::table('brands')->where('name',$request->brand_name)->first();

    	//dd($category->cid);

    	product::create(

    		[
    			'name' => $request->product_name,
    			'cid' => $category->cid,
    			'bid' => $brand->bid,
    			'price' => $request->product_price,
    			'quantity' => $request->product_quantity,
    			'status' => '1'
    		]

    	);

    	return redirect()->back();
    }


    // Return category name
    public static function categoryName()
    {
    	$categories = DB::table('categories')->select('name')->get();

    	return $categories;
    }

    // Return brand name
    public static function brandName()
    {
    	$brands = DB::table('brands')->select('name')->get();

    	return $brands;
    }
}
