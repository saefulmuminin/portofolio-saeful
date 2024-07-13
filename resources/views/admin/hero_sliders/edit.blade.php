@extends('layouts.admin')

@section('title', 'Edit Hero Slider')

@section('app')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Hero Slider</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('admin.hero_sliders.update', $heroSlider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        @include('admin.hero_sliders.form')

                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.hero_sliders.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
