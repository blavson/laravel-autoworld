@extends('master')
@section('body')
    <div class="row">

        <div class="col-md-3">
            <form method="post" action="search/">
                @csrf
            <label for="select-maker"></label>
            <select class="form-select" name="select_maker" id="select-maker">
                <option selected>Select Maker</option>
                @foreach($makers as $maker)
                    <option value="{{ $maker['id'] }}">{{$maker['maker']}}</option>
                @endforeach
            </select>
            <select class="form-select mt-2" aria-label="Select Model" id="select-model" name="select_model">
                <option selected>Select Model</option>
                @foreach($models as $model)
                    <option value="0">All Models</option>
                @endforeach
            </select>
            <button class="btn btn-primary mt-3" type="submit">Search</button>
            </form>
        </div>

        <div class="col-md-9">
                @foreach($cars as $c)
                    <div class="card mt-4" >

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h5 class="card-title">{{ $c->model->model_name }}</h5>
                                    <p class="card-text"> {{ $c->description }}</p>
                                </div>
                                <div class="col-md-3">
                                    <img class="card-img-top" src="https://dummyimage.com/200x200/051d6b/ffffff.jpg&text=car+image" alt="Card image cap">
                                </div>

                            </div>
                        </div>
{{--                        <ul class="list-group list-group-flush">--}}
{{--                            <li class="list-group-item">{{ $c->model->model_name }} </li>--}}
{{--                            <li class="list-group-item">{{$c->price}}</li>--}}
{{--                        </ul>--}}
                    </div>
                @endforeach
            </div>
    </div>
@endsection

@section('js_bottom')
    <script>
        document.querySelector('#select-maker').addEventListener('change', async (event) => {
             let maker_id = event.target.value
            let models = await fetch("http://localhost:8000/jsonmodels/" + maker_id ,{
                            method : "get",
                            dataType: "json",
                            headers: {
                                'Content-Type': 'application/json'
                            },
                        }).then( response => response.json())

            let selectModel = document.querySelector('#select-model');
            let s ="<option value='0'>All Models </option>"
            for (const [key, value] of Object.entries(models)) {
                s += `<option value='${key}'>${value}</option>`
            }
             selectModel.innerHTML = s;
                 } )
    </script>

@endsection
