@extends('master')

@section('body')
    <small>{{$car->created_at->diffForHumans()}}</small>
    <p> {{ $car->description }}</p>
@endsection
