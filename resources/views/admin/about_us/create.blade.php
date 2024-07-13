@extends('layouts.admin')

@section('title', 'Create About Us')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @yield('title')
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.about_us.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <textarea type="text" class="form-control" id="heading" name="heading" value="{{ old('heading') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
                            </div>

                            <a href="{{ route('admin.about_us.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
