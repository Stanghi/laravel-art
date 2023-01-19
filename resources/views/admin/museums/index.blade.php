@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-3">
        <h1 class="fs-5 text-uppercase">Museum List</h1>
        <table class="table table-striped mb-5">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Nation</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($museums as $museum)
                    <tr>
                        <td>{{ $museum->name }}</td>
                        <td>{{ $museum->nation }}</td>
                        <td><a class="btn btn-outline-primary" href="{{ route('admin.museums.show', $museum) }}"><i
                                    class="fa-solid fa-eye"></i></a></td>
                        <td><a class="btn btn-outline-success" href="{{ route('admin.museums.edit', $museum) }}"><i
                                    class="fa-regular fa-pen-to-square"></i></a></td>
                    </tr>
                @empty
                    <h1>Museum not available</h1>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $museums->links() }}
@endsection

@section('title')
    | Admin
@endsection
