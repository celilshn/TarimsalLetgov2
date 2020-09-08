@extends('backend.layouts.master')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Blank Page</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="/admin">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Pages</span></li>
                    <li><span>{{$sitesetting->site_name}}</span></li>
                </ol>


            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Form Elements</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered" method="POST" action="{{route('save')}}">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Site Adı:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{$sitesetting->site_name}}"
                                   name="site_name">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Site Logosu:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{$sitesetting->logo}}"
                                   name="site_logo">
                        </div>
                    </div>
                    <div class="form-group col-md-6 pull-right">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>


                </form>
            </div>
        </section>
        <!-- end: page -->
    </section>
@endsection('content')
