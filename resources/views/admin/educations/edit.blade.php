@extends('layouts.admin')

@section('title', 'Edit Education')

@section('app')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Education</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.educations.update', $education->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="degree">Degree</label>
                                <input type="text" class="form-control" id="degree" name="degree" value="{{ $education->degree }}" required>
                            </div>
                            <div class="form-group">
                                <label for="university">University</label>
                                <input type="text" class="form-control" id="university" name="university" value="{{ $education->university }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $education->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="graduation_year">Graduation Year</label>
                                <input type="number" class="form-control" id="graduation_year" name="graduation_year" value="{{ $education->graduation_year }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
