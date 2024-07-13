@extends('layouts.admin')

@section('title', 'Education Records')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Education Records</h4>
                        <a href="{{ route('admin.educations.create') }}" class="btn btn-success float-right">Add New</a>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Degree</th>
                                    <th>University</th>
                                    <th>Description</th>
                                    <th>Graduation Year</th>
                                    <th width="280px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($educations as $education)
                                    <tr>
                                        <td>{{ \Illuminate\Support\Str::limit($education->degree, 25) }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($education->university, 25) }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($education->description, 25) }}</td>
                                        <td>{{ $education->graduation_year }}</td>                                        
                                        <td>
                                            <form action="{{ route('admin.educations.destroy', $education->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('admin.educations.edit', $education->id) }}">Edit</a>
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
    </div>
@endsection
