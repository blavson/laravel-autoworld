@extends('master')

@section('body')
    @if (empty($cars))
      <h2>No Cars with this model</h2>
    @else
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/makers/{{$cars[0]->maker}}">{{$cars[0]->maker }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $cars[0]->model_name }}</li>
            </ol>
        </nav>
        @foreach($cars as $car)
            <div class="card mt-4" >

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"> {{$car->maker }} - {{ $car->model_name }}</h5>
                            <span class="mileage"> Mileage : {{$car->mileage}}</span>
                            <span class="price"> Price : {{ $car->price }}</span>
                            <p class="card-text">
                                {{ $car->description }}</p>

                        </div>
                        <div class="col-md-3">
                            <img class="card-img-top" src="https://dummyimage.com/200x200/051d6b/ffffff.jpg&text=car+image" alt="Card image cap">
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
