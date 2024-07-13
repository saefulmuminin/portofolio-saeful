<!-- resources/views/admin/portfolios/edit.blade.php -->

@extends('layouts.admin')

@section('title', 'Edit Portfolio')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Portfolio</h4>
                        <a href="{{ route('admin.portfolios.index') }}" class="btn btn-primary float-right">Back</a>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="portfolio_category_id">Category</label>
                                <select class="form-control" id="portfolio_category_id" name="portfolio_category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $portfolio->portfolio_category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ $portfolio->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="link" name="link" value="{{ $portfolio->link }}">
                            </div>

                            <div class="form-group">
                                <label for="image">Current Image</label><br>
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" style="max-width: 200px;"><br><br>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
