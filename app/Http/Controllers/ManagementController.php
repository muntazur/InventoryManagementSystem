<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagementController extends Controller
{
    public function manageBrand()
    {
    	$brands = DB::table('brands')->get();
    	//dd($brands);

    	return view('manage.brand',['brands' => $brands]);
    }


    public function manageCategory()
    {
    	$categories = DB::table('categories')->get();
    	//dd($brands);

    	return view('manage.category',['categories' => $categories]);
    }
    public function manageProduct()
    {
    	$products = DB::table('products')->get();
    	//dd($brands);

    	return view('manage.product',['products' => $products]);
    }

    public static function categoryName($cid)
    {
    	$category = DB::table('categories')->where('cid',$cid)->first();
    	

    	return $category->name;
    }
    public static function brandName($bid)
    {
    	$brand = DB::table('brands')->where('bid',$bid)->first();

    	return $brand->name;
    }



    // Edit operations
    public function editBrand()
    {

    }

    public function editCategory()
    {

    }

    public function editProduct()
    {

    }

    public funtion deleteBrand()
    {

    }

    public funtion deleteCategory()
    {
        
    }
    public funtion deleteProduct()
    {
        
    }

}
