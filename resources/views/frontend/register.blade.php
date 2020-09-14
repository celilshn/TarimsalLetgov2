@extends('frontend.layouts.master')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mt-5 mb-5" data-aos="fade">
                    @if($errors->any())
                        <h4>{{$errors->first()}}</h4>
                    @endif
                    <form action="{{route('authregister')}}" method="post" class="p-5 bg-white">
                        @csrf

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input name="email" type="email" id="email" required class="form-control" value="{{old('email')}}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Password</label>
                                <input name="password" type="password" required id="subject" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Re-type Password</label>
                                <input name="password2" type="password" required id="subject" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-12">
                                <p>Have an account? <a href="{{route('login')}}">Log In</a></p>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
