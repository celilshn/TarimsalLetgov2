@extends('frontend.layouts.master')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{$images[0]->url}}')"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>{{$product->name}}</h1>
                            <p class="mb-0">{{$product->created_at->diffForHumans()}}</p>
                            <br>
                            <h4 style="color: white">{{$product->views}} Görüntüleme</h4>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="slide-one-item home-slider owl-carousel">
                        @foreach($images as $image)
                            <img src="{{$image->url}}" alt="Image" class="img-fluid"
                                 style="height: 300px;">


                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 mb-3 bg-light" data-aos="fade" data-aos-delay="100" style="height: 300px">

                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Başlık</p>
                        <p class="mb-4">{{$product->name}}</p>

                        <p class="mb-0 font-weight-bold">Tarih</p>
                        <p class="mb-4">{{$product->created_at}}</p>

                        <p class="mb-0 font-weight-bold">Görüntüleme</p>
                        <p class="mb-0">{{$product->views}}</p>
                        <br>
                    </div>

                </div>
                <div class="col-lg-4 mb-3 bg-light" data-aos="fade" data-aos-delay="100" style="height: auto">

                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Konum</p>
                        <p class="mb-4">{{$product->getTown->town_name}}, {{$product->getTown->getCity->city_name}}</p>

                        <p class="mb-0 font-weight-bold">Satıcı</p>
                        <p class="mb-4"><a href="#">{{$product->getUser->name}}</a></p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">{{$product->getUser->email}}</a></p>
                        <br>
                    </div>

                </div>
                <div class="col-lg-12 bg-white">
                    <div class="mb-12 ">
                        <br>
                        <h3 class="h5 text-black mb-3">Açıklama</h3>
                        <p>
                            {{$product->description}}</p>


                    </div>
                </div>
            </div>
        </div>


@endsection
