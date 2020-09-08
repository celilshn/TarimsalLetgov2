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
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="mb-4">
                        <div class="slide-one-item home-slider owl-carousel">
                            @foreach($images as $image)

                                <div><img src="{{$image->url}}" alt="Image" class="img-fluid" style="height: 500px"></div>

                            @endforeach
                        </div>
                    </div>


                </div>
                <div class="col-lg-3 ml-auto">

                    <div class="mb-5">
                        <h4 class="h5 mb-4 text-black">Açıklama</h4>
                        <p>
                            {{$product->description}}
                        </p>
                        <h5>{{$product->views}} Görüntüleme</h5>

                    </div>


                </div>

            </div>
        </div>
    </div>


@endsection
