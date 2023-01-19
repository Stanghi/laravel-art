@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-3">
            <h1 class="fs-5 text-uppercase">Arts List</h1>
        <table class="table table-striped mb-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ( as )
                <tr>
                    <td><img style="width: 60px" src="{{  }}" alt="{{ }}"></td>
                    <td>{{ }}</th>
                    <td>{{  }}</td>
                    <td>{{ }}</td>
                    <td><a class="btn btn-outline-primary" href="{{route()}}"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a class="btn btn-outline-success" href="{{route()}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                     <td>
                        @include('')
                    </td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
        {{$projects->links()}}
@endsection

@section('title')
   | Admin
@endsection
