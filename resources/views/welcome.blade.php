@extends('layout')
@section('title','Home')
@section('content')
    <h1>Welcome to Na Handsome</h1>
    <ul>
            @foreach($tasks as $item)
                <li> {{ $item }}</li>
            @endforeach
    </ul>
@endsection