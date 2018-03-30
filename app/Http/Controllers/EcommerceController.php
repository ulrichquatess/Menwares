<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Social;
use App\Client;
use App\HomePage;
use Image;
use Storage;
use Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Validator;

class EcommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('featured', true)->orderBy('created_at', 'desc')->limit(4)->get();
        $categories = Product::orderBy('created_at', 'desc')->limit(4)->get();
        $dresses = Product::where('featured', false)->orderBy('created_at', 'desc')->limit(20)->get();
        $client = Client::all();
        return view('ecommerce.index')->with([
            'product' => $product,
            'categories' => $categories,
            'dresses' => $dresses,
            'client' => $client
        ]);
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

    public function search(Request $request)
   {

        $query = $request->input('query');

        $products = Product::where('name', 'like', "%$query%")->get();

        return view('ecommerce.search-result')->with('products', $products);
    }

     public function contact()
     {
        $setting = Social::find(1);

        return view('ecommerce.contact')->with('setting', $setting);
    }

    public function postContact(Request $request) {

        Mail::send(new sendMail());
        $setting = Social::find(1);
        return view('ecommerce.contact')->with('setting', $setting);    
    }

     public function about()
     {
        $setting = Social::find(1);
        $pages = HomePage::find(1);
        $client = Client::all();

        return view('ecommerce.about')->with([
            'setting' =>  $setting,
            'pages' => $pages,
            'client' => $client
        ]);
    }

     public function blog()
     {
        $category = Category::all();

        return view('ecommerce.blog')->with([
            'category' => $category 
        ]);
    }

}
