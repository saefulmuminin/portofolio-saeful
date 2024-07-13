@extends('layouts.admin')

@section('title', 'Edit About Us')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @yield('title')
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.about_us.update', $aboutUs->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <input type="text" class="form-control" id="heading" name="heading" value="{{ old('heading', $aboutUs->heading) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $aboutUs->content) }}</textarea>
                            </div>

                            <a href="{{ route('admin.about_us.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
