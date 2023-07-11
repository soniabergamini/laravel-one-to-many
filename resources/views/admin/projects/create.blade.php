@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <div class="w-100 text-white bg-dark bg-gradient text-center py-2 rounded mb-4">
            <h2><i class="fa-solid fa-folder-plus fa-lg me-3"></i>ADD NEW PROJECT</h2>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route("admin.projects.store") }}" method="post" class="needs-validation">
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old("name") }}" class="form-control mb-4 @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="domain">Domain</label>
            <input type="text" name="domain" id="domain" value="{{ old("domain") }}" class="form-control mb-4 @error('domain') is-invalid @enderror">
            @error('domain')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="link">URL Link</label>
            <input type="text" name="link" id="link" value="{{ old("link") }}" class="form-control mb-4 @error('link') is-invalid @enderror">
            @error('link')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control mb-4 @error('description') is-invalid @enderror">{{ old("description") }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="image">URL Image</label>
            <input type="text" name="image" id="image" value="{{ old("image") }}" class="form-control mb-4 @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="date">Release Date</label>
            <input type="date" name="date" id="date" value="{{ old("date") }}" class="form-control mb-4 @error('date') is-invalid @enderror">
            @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="stack">Stack</label>
            <select id="stack" name="stack" class="form-select mb-4" aria-label="Select">
                <option value="" @selected(!old('stack')) disabled disabled>Select Stack</option>
                @foreach ($allStack as $item)
                    <option value="{{ $item->stack }}" @selected(old('stack')==$item->stack)>{{ $item->stack }}</option>
                @endforeach
            </select>
            @error('stack')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <input type="submit" class="btn btn-primary form-control mb-4" value="ADD PROJECT">

        </form>
    </div>
</div>

@endsection
