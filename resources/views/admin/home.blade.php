@extends('layouts.app')

@section('content')
    <div class="container w-50 m-auto text-center pt-5 text-uppercase">
        <div class="box p-5 bg-light text-dark">
            <p>{{ Auth::user()->name }}</p>
            <p>{{ Auth::user()->email }}</p>
        </div>
        <a class="btn btn-outline-secondary fw-light text-uppercase create mt-5" href="{{route('admin.projects.create')}}">Add new project</a>
    </div>
@endsection

@section('title')
   | Admin
@endsection
