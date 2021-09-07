@foreach($vehicles as $v)
    {{$v->price }}
    {{ $v->description }}
    {{$v->model }}
@endforeach
