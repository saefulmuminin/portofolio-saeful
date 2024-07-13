<!-- resources/views/admin/portfolios/index.blade.php -->

@extends('layouts.admin')

@section('title', 'Portfolios')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Portfolios</h4>
                        <a href="{{ route('admin.portfolios.create') }}" class="btn btn-success float-right">Add New</a>
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
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th width="280px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $portfolio)
                                    <tr>
                                        <td>{{ \Illuminate\Support\Str::limit($portfolio->title, 25) }}</td>
                                        <td>{{ $portfolio->category->name }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($portfolio->description, 26) }}</td>
                                        <td><a href="{{ $portfolio->link }}" target="_blank">{{ $portfolio->link }}</a></td>
                                        <td><img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" style="max-width: 100px;"></td>
                                        <td>
                                            <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('admin.portfolios.edit', $portfolio->id) }}">Edit</a>
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
