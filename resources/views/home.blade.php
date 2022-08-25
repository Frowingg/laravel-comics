@extends('layouts.app')

@section('main_content')
<section class="products-list">
    <div class="container">

        @foreach ($comics as $comic)
            <h1>{{$comic['title']}}</h1>
        @endforeach

    </div>
</section>

@endsection 