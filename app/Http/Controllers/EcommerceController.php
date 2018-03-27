<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
use Storage;

class EcommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('featured', true)->take(5)->InRandomOrder()->get();
        return view('ecommerce.index')->with('product', $product);
    }

    //This function Below is use to get all the product ever entered into the database
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function product()
    {
         $categories = Category::all();
         $pagination = 8;
        // Here we are making a conditional statement to filter base on the category of the query string
        if (request()->category) {
            $products  = Product::with('category')->whereHas('category', function ($query) {
                $query->where('slug', request()->category);
            });

            $categoryName = $categories->where('slug', request()->category)->first()->name;

        } else {
                $products = Product::where('featured', true);
                $categoryName = 'Featured';
        }

        if (request()->sort == 'low_high') {
                $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
                $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else{
            $products = $products->paginate($pagination);
        }
        
        return view('ecommerce.product')->with('products', $products)->with('categories', $categories)->with('categoryName', $categoryName);
    }

    //Here we are getting the single product

    public function getSingleProduct($slug)
    {
        $product = Product::where('slug', '=', $slug)->firstorFail();
        $prod = Product::InRandomOrder()->take(5)->get();
        return view('ecommerce.single-product')->with('product', $product)->with('prod', $prod);
    }

}
