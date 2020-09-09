@extends('frontend.layouts.master')
@section('content')

    <div class="site-blocks-cover overlay" style="background-image: url('{{asset('frontend/')}}/images/site-bg.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-12">


                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center">
                            <h1 class="" data-aos="fade-up">{{$sitesettings->site_main_catchword}}</h1>
                            <p data-aos="fade-up" data-aos-delay="100">{{$sitesettings->site_sub_catchword}}</p>
                        </div>
                    </div>

                    <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
                        <form method="post" action="{{route('search')}}">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                    <input type="text" name="key" class="form-control rounded" placeholder="Ne Arıyorsun?">
                                </div>

                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="select-wrap" style="">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>

                                        <select class="form-control rounded" name="p_id" id="products" style="width: 100%;height: 100%">
                                            @foreach($towns as $town)
                                                @if($town->town_name == $town->getCity->city_name)
                                                    <option value="{{$town->id}}">{{$town->town_name}} TÜMÜ</option>
                                                @else
                                                    <option value="{{$town->id}}">{{$town->town_name}}
                                                        ,{{$town->getCity->city_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <span class="icon icon-room"></span>

                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="select-wrap">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                        <select class="form-control rounded" name="" id="">
                                            <option value="">Tüm Kategoriler</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                    <input type="submit" class="btn btn-primary btn-block rounded" value="Ara">
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">

            <div class="overlap-category mb-5">
                <div class="row align-items-stretch no-gutters">
                    @foreach($categories as $category)
                        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                            <a href="#" class="popular-category h-100">
                                <span class="icon"><img src="{{$category->image}}" width="50"
                                                        height="50"> </span></span>
                                <span class="caption mb-2 d-block">{{$category->name}}</span>
                                <span class="number">{{$categoriesCount[$loop->index]}}</span>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="h5 mb-4 text-black">Öne Çıkan İlanlar</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12  block-13">
                    <div class="owl-carousel nonloop-block-13">
                        @foreach($featuredproducts as $product)
                            <div class="d-block d-md-flex listing vertical">
                                <a href="{{route('single',['slug'=>$product->slug,'id'=>$product->id])}}"
                                   class="img d-block"
                                   style="background-image: url('{{$featuredproductimage[$loop->index]->url}}');"></a>
                                <div class="lh-content">
                                    <span class="category">{{$product->getCategory->name}}</span>
                                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                    <h3><a href="listings-single.html">{{$product->name}}</a></h3>
                                    <address>{{$product->city}}</address>
                                    <p class="mb-0">
                                        <span class="review">{{$product->views}} Görüntüleme</span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="site-section" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Popüler Ürünler</h2>
                    {{--                    <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>--}}
                </div>
            </div>

            <div class="row">
                @foreach($popularProducts as $product)
                    <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

                        <div class="listing-item">
                            <div class="listing-image">
                                <img src="{{$popularProductImage[$loop->index]->url}}" alt="Image" class="img-fluid"
                                     style=" height: 200px">
                            </div>
                            <div class="listing-item-content">
                                <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left"
                                   title="Bookmark"><span class="icon-heart"></span></a>
                                <a class="px-3 mb-3 category" href="#">{{$product->getCategory->name}}</a>
                                <h2 class="mb-1"><a href="{{route('single',[
                            'slug'=>$product->slug,
                            'id'=>$product->id])}}">{{$product->name}}</a></h2>
                                <span class="address"></span>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
