@extends('layouts.admin')

@section('title', 'Experience Records')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Experience Records</h4>
                        <a href="{{ route('admin.experiences.create') }}" class="btn btn-success float-right">Add New</a>
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
                                    <th>Title</th>
                                    <th>Company</th>
                                    <th>Description</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th width="280px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experiences as $experience)
                                    <tr>
                                        <td>{{ $experience->title }}</td>
                                        <td>{{ $experience->company }}</td>
                                        <td>{{ $experience->description }}</td>
                                        <td>{{ $experience->start_date }}</td>
                                        <td>{{ $experience->end_date }}</td>
                                        <td>
                                            <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('admin.experiences.edit', $experience->id) }}">Edit</a>
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
