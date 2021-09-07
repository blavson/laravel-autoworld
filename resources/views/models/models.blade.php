@foreach($vehicles as $v)
    <h1>{{$v->model->model_name}}</h1>
    {{$v->price}}

    {{$v->mileage}}
    {{$v->description    }}
@endforeach
