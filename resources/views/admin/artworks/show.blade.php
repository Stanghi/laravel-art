@extends('layouts.app')

@section('title')
    | Admin Project-Show
@endsection

@section('content')
    <div class="container">
        <p>Name: {{ $artwork->name }}</p>
        <p>Year: {{ $artwork->year }}</p>
    </div>
@endsection
