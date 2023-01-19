@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto pt-4">
        <a href="{{ route('admin.museums.index') }}" class="btn btn-outline-secondary text-uppercase mb-3">Back to the
            List</a>
        <h1 class="text-uppercase fs-5 fw-bold pb-2">Insert new Museum</h1>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.museums.update', $museum) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    value="{{ old('name', $museum->name) }}" placeholder="project name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nation" class="form-label">Nation</label>
                <input type="text" class="form-control @error('nation') is-invalid @enderror" name="nation"
                    id="nation" value="{{ old('client_name', $museum->nation) }}" placeholder="client name">
                @error('nation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection

@section('title')
    | Admin
@endsection
