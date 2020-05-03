@extends('main')
@section('content')
    <div class="card card-dark">
        <h2 class="card-title fun-font">{{$champion}}</h2>
        <champion :champname="{{json_encode($champion)}}"></champion>
    </div>
@endsection
