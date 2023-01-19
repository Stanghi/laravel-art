@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-3">
            <h1 class="fs-5 text-uppercase">Artist List</h1>
        <table class="table table-striped mb-5">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artists as $artist)
                <tr>
                    <td>{{$artist->name }}</th>
                    <td><a class="btn btn-outline-primary" href="{{route('admin.artists.show')}}"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a class="btn btn-outline-success" href="{{route('admin.artists.create')}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                </tr>
                @empty
                <h1>Artist not available</h1>
                @endforelse
            </tbody>
        </table>
    </div>
        {{$projects->links()}}
@endsection

@section('title')
   | Admin
@endsection
