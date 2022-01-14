<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function home(){
        $data['featured_products'] = Product::where('is_featured',1)->limit(8)->get();
        // dd($data);
        return view('frontend.home',$data);
    }
    public function product_details($id){
        $data['product'] = Product::with('category')->findOrFail($id);
        $data['related_products'] = Product::where('category_id',$data['product']->category->id)->orderBy('id','DESC')->limit(4)->get();
        return view('frontend.product_details',$data);
    }
}
