@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-3">
        <h1 class="fs-5 text-uppercase">Artworks List</h1>
        <table class="table table-striped mb-5">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artworks as $artwork)
                    <tr>
                        <td>{{ $artwork->name }}</th>
                        <td>{{ $artwork->year }}</td>
                        <td><a class="btn btn-outline-primary" href="{{ route('admin.artworks.show') }}"><i
                                    class="fa-solid fa-eye"></i></a></td>
                        <td><a class="btn btn-outline-success" href="{{ route('admin.artworks.edit') }}"><i
                                    class="fa-regular fa-pen-to-square"></i></a></td>
                    </tr>
                @empty
                    <h1>Artwork not available</h1>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $artworks->links() }}
@endsection

@section('title')
    | Admin
@endsection
