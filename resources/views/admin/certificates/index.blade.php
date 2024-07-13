@extends('layouts.admin')

@section('title', 'Certificates')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Certificates</h1>
                <a href="{{ route('admin.certificates.create') }}" class="btn btn-primary">Add Certificates</a>
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($certificates as $certificate)
                            <tr>
                                <td>
                                    @if ($certificate->image)
                                        <img src="{{ asset('storage/' . $certificate->image) }}" alt="Certificate Image" width="150">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.certificates.edit', $certificate->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin.certificates.destroy', $certificate->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
