@extends('frontend.layouts.master')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url('{{asset('frontend/')}}/images/site-bg.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Reklam Listeleri</h1>
                            <p class="mb-0">İstediğiniz ürünü seçin</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="row">

                        @foreach($products as $product)
                            <div class="col-lg-4">

                                <div class="d-block d-md-flex listing vertical">
                                    <a href="{{route('single',['id'=>$product->id,'slug' => $product->slug])}}"
                                       class="img d-block"
                                       style="background-image: url('{{$productImages[$loop->index]->url}}');"></a>
                                    <div class="lh-content">
                                        <span class="category">{{$product->getCategory->name}}</span>
                                        <h3><a href="#">{{$product->name}}</a></h3>
                                        <address>{{$product->getTown->town_name}}, {{$product->getTown->getCity->city_name}}</address>                                        <p class="mb-0">
                                            <span class="review">{{$product->views}} Görüntüleme</span>
                                        </p>
                                    </div>
                                </div>

                            </div>

                        @endforeach


                    </div>

                    @if($products->lastPage()>1)
                        <div class="col-12 mt-5 text-center">
                            <div class="custom-pagination">
                                @if($products->currentPage()==1)
                                    <span>1</span>
                                @else
                                    <a href="{{$products->url(1)}}">1</a>
                                @endif
                                @for($i=2;$i<$products->lastPage();$i++)
                                    @if($products->currentPage()==$i)
                                        <span>{{$i}}</span>
                                    @else
                                        <a href="{{$products->url($i)}}">{{$i}}</a>

                                    @endif
                                @endfor
                                @if($products->currentPage()==$products->lastPage())
                                    <span>{{$products->currentPage()}}</span>
                                @endif
                            </div>
                        </div>


                    @endif
                </div>


            </div>
        </div>
    </div>



@endsection
