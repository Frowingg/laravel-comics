@extends('layouts.app')

@section('main_content')

    <section class="comic-info">

        <div class="comic-info-top">
            <div class="container">
                <img src="{{$current_comic['thumb']}}" alt="{{$current_comic['title']}}">
            </div>
        </div>

        <div class="comic-info-center">
            <div class="container">
                <div class="comic-info-center-left">
                    <h1>{{ $current_comic['title'] }}</h1>
                    <p>{{ $current_comic['description'] }}</p>
                </div>

                <div class="comic-info-center-right">
                    <div class="img">
                        <img src="{{ asset('img/adv.jpg') }}" alt="advertise">
                    </div>
                </div>
            </div>
        </div>

        <div class="comic-info-bottom">
            <div class="container">
                <div class="comic-info-bottom-left">
                    <h3>Talent</h3>
                    <div class="info-box">
                        <div class="left">
                            Art by:
                        </div>
                        <div class="right">
                            
                            @foreach($current_comic['artists'] as $artist)
                                <p> {{$artist}} @if($loop->last), @endif </p>
                            @endforeach
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="left">
                            Written by:
                        </div>
                        <div class="right">
                            @foreach($current_comic['writers'] as $writer)
                                <p> {{$writer}} @if($loop->last), @endif </p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="comic-info-bottom-right">
                    <h3>Specs</h3>
                    <div class="info-box">
                        <div class="left">
                            Series:
                        </div>
                        <div class="right">
                            
                            <p> {{$current_comic['series']}} </p>
                           
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="left">
                            U.S. price:
                        </div>
                        <div class="right black">
                            <p> {{$current_comic['price']}} </p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="left black">
                            On sale date:
                        </div>
                        <div class="right black">
                            <p> {{$current_comic['sale_date']}} </p>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
        

                {{-- <img src="{{$current_comic['thumb']}}" alt="{{$current_comic['title']}}"> --}}

                {{-- <h1>{{ $current_comic['title'] }}</h1> --}}


                {{-- <p>{!! $current_comic['description'] !!}</p> --}}


@endsection

{{-- @section('main_classes')
    secondary-color-back
@endsection --}}