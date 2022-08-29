@extends('layouts.app')

@section('main_content')

    @include('components.products-list', $comics)

    @include('partials.banner')


@endsection 