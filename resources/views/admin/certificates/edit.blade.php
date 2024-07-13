@extends('layouts.admin')

@section('title', 'Edit Certificate')

@section('app')
    <div class="container">
        <h1>Edit Certificate</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($certificate->image)
                    <img src="{{ asset('storage/' . $certificate->image) }}" class="img-fluid mt-2" width="150" alt="Certificate Image">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
