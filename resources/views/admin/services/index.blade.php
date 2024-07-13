@extends('layouts.admin')

@section('title', 'Hero Sliders')

@section('app')



<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Services</h2>
            <a class="btn btn-success" href="{{ route('admin.services.create') }}"> Create New Service</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Services</h4>
            <p class="card-category"> List of all services</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->icon }}</td>
                            <td>{{ $service->description }}</td>
                            <td>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">


                                    <a class="btn btn-primary" href="{{ route('admin.services.edit', $service->id) }}">Edit</a>

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
</div>


@endsection
