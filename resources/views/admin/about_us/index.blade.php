@extends('layouts.admin')

@section('title', 'About Us')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        About Us
                        <a href="{{ route('admin.about_us.create') }}" class="btn btn-primary float-end">Add New</a>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Heading</th>
                                <th>Content</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($aboutUs as $about)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Str::limit($about->heading, 50) }}</td>
                                    <td>{{ Str::limit($about->content, 50) }}</td>

                                    <td>
                                        <form action="{{ route('admin.about_us.destroy', $about->id) }}" method="POST">
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.about_us.edit', $about->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
