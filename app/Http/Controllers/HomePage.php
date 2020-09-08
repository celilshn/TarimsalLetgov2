<?php

namespace App\Http\Controllers;


use App\Models\Image;
use App\Models\SiteSetting;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Cookie;
use Request;

class HomePage extends Controller
{
    public function index()
    {
        $data["categories"] = Category::all();
        $data["sitesettings"] = SiteSetting::find(1);
        $data["featuredproducts"] = Product::orderBy('views', 'desc')->limit(5)->get();
        $categoriesCount = array();
        $featuredproductimage = array();
        $popularProducts = array();
        $popularProductImage = array();
        foreach ($data['featuredproducts'] as $product) {
            array_push($featuredproductimage, Image::where('product_id', $product->id)->first());
        }
        foreach ($data['categories'] as $category) {
            $product = Product::where('category_id', $category->id)->orderBy('views', 'desc')->first();
            array_push($categoriesCount, Product::where('category_id', $category->id)->count());
            array_push($popularProducts, $product);
            array_push($popularProductImage, Image::where('product_id', $product->id)->orderBy('created_at', 'desc')->skip(1)->first());
        }
        $data["categoriesCount"] = $categoriesCount;
        $data["featuredproductimage"] = $featuredproductimage;
        $data["popularProducts"] = $popularProducts;
        $data["popularProductImage"] = $popularProductImage;


        return view('frontend.homepage', $data);
    }

    public function single($slug, $id)
    {
        $product = Product::find($id);
        if (!Cookie::get($id)) {
            Cookie::queue($id, true, 120);
            $product->views = $product->views + 1;
            $product->save();
        }
        $data["sitesettings"] = SiteSetting::find(1);
        $data["product"] = $product;
        $data["images"] = Image::where('product_id', $id)->get();
        return view('frontend.single', $data);
    }

    public function products()
    {
        $data["sitesettings"] = SiteSetting::find(1);
        $data["products"] = Product::inRandomOrder()->paginate(9);
        $productImages = array();
        foreach ($data['products'] as $product) {
            array_push($productImages, Image::where('product_id', $product->id)->first());
        }
        $data["productImages"] = $productImages;

        return view('frontend.products', $data);
    }

}
