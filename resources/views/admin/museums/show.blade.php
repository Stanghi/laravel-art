@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-3">
            <h1 class="fs-5 text-uppercase">Museum</h1>
            <p>{{$museum->name}}</p>
            <p>{{$museum->nation}}</p>
    </div>
@endsection

@section('title')
   | Admin
@endsection
