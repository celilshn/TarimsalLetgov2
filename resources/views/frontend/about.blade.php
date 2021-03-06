@extends('frontend.layouts.master')
@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('frontend/')}}/images/site-bg.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Hakkımızda</h1>
                            <p class="mb-0">Dünya Çapında Ürünler</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section"  data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 ml-auto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eveniet laudantium dignissimos atque labore excepturi perspiciatis ut fugit eius itaque iste quibusdam dolore consectetur reprehenderit. Illum molestiae nemo culpa optio.</p>
                </div>
                <div class="col-md-4">
                    <p>Similique neque facere cum! Et esse natus qui fugiat temporibus voluptate debitis similique eos illum pariatur suscipit placeat omnis perferendis ab enim quis eligendi minima explicabo aperiam. Eaque minus itaque?</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{asset('frontend/')}}/images/hero_2.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-5 ml-auto">
                    <h2 class="text-primary mb-3">Why Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>
                    <p class="mb-4">Adipisci dolore reprehenderit est et assumenda veritatis, ex voluptate odio consequuntur quo ipsa accusamus dicta laborum exercitationem aspernatur reiciendis perspiciatis!</p>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="{{asset('frontend/')}}/images/hero_1.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-5 mr-auto order-md-1">
                    <h2 class="text-primary mb-3"></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
