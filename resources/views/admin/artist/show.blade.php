@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-3">
            <h1 class="fs-5 text-uppercase">Artist</h1>
            <p>{{ $artist->name }}</p>
    </div>
@endsection

@section('title')
   | Admin
@endsection
