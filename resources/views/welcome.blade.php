@extends('layouts.app')
@section('content')
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding-right: 0px;padding-left: 0px;">
        <div class="Rectangle-1 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <center>    
                <img src="img/bitmap.png" srcset="img/bitmap@2x.png 2x, img/bitmap@3x.png 3x" class="Bitmap">
                <p class="tima-escolha">{{trans('labels.good_choice')}}</p>
                <p class="Crie-sua-conta-gratu">{{trans('labels.create_account')}}</p>
                <p class="EleveCRM-a-forma-m">{{trans('labels.eleveCRM_a_forma')}}</p>
            </center>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ocult">
                    <img src="img/image.png" srcset="img/image@2x.png 2x, img/image@3x.png 3x" class="image">
                </div>
                
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    @include('auth.register')
                </div>
            </div>
        </div>
        <div class="Rectangle-14"></div>
    </div>
    <div class="Type-something2 col-md-4 col-sm-4">
        <p>
            {{trans('labels.text_body')}}
        </p>
        <hr class="Line"> 
    </div>
@endsection