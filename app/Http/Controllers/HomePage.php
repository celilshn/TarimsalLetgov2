<?php

namespace App\Http\Controllers;


use App\Models\Image;
use App\Models\SiteSetting;
use App\Models\Product;
use App\Models\Category;
use App\Models\Town;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class HomePage extends Controller
{
    public function login()
    {
        $data["sitesettings"] = SiteSetting::find(1);
        return view('frontend.login', $data);
    }

    public function register()
    {
        $data["sitesettings"] = SiteSetting::find(1);
        return view('frontend.register', $data);
    }

    public function index()
    {
        $data["categories"] = Category::all();
        $data['towns'] = Town::orderBy('town_name', 'asc')->get();
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
    public function about()
    {
        $data["sitesettings"] = SiteSetting::find(1);

//        Artisan::call('db:seed', ["--force" => true ]);

        return view('frontend.about', $data);
    }

    public function search(Request $request)
    {
        $data["sitesettings"] = SiteSetting::find(1);
        $key = $request->key;
        $town_id = $request->p_id;
        $category_id = $request->category_id;
        //Validation
        if (empty($category_id) && empty($town_id)) {
            $data["products"] = Product::where('name', 'LIKE', '%' . $key . '%')->paginate(9);
            $searchvalues = ['category' => 'Tüm Kategoriler', 'town' => 'Tüm Şehirler'];
        } else if (empty($category_id) && !empty($town_id)) {
            $town = Town::find($town_id);
            $city_id = $town->getCity->id;
            if ($town->getCity->city_name != $town->town_name) {
                $data["products"] = Product::where('name', 'LIKE', '%' . $key . '%')->where('town_id', $town_id)->paginate(9);
                $searchvalues = ['category' => 'Tüm Kategoriler', 'town' => $town->town_name . ' ' . $town->getCity->city_name];
            } else {
                $data["products"] = Product::select('products.*')->where('name', 'LIKE', '%' . $key . '%')
                    ->join('towns', 'towns.id', '=', 'products.town_id')->
                    where('city_id', $city_id)->paginate(9);
                $searchvalues = ['category' => 'Tüm Kategoriler', 'town' => $town->getCity->city_name];
            }
        } else if (!empty($category_id) && empty($town_id)) {
            $data["products"] = Product::where('name', 'LIKE', '%' . $key . '%')->where('category_id', $category_id)->paginate(9);
            $searchvalues = ['category' => Category::find($category_id)->name, 'town' => 'Tüm Şehirler'];

        } else {
            $town = Town::find($town_id);
            $city_id = $town->getCity->id;
            $data["products"] = Product::select('products.*')->where('name', 'LIKE', '%' . $key . '%')->where('category_id', $category_id)
                ->join('towns', 'towns.id', '=', 'products.town_id')->
                where('city_id', $city_id)->paginate(9);
            $searchvalues = ['category' => Category::find($category_id)->name, 'town' => $town->town_name . ' ' . $town->getCity->city_name];

        }
        //Validation
        $productImages = array();
        foreach ($data['products'] as $product) {
            array_push($productImages, Image::where('product_id', $product->id)->skip(1)->first());
        }
        $data["productImages"] = $productImages;
        $data["searchvalues"] = $searchvalues;

        return view('frontend.search-products', $data);
    }

}
