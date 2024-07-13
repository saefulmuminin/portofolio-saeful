@extends('layouts.user')

@section('web')
    <!-- Hero Section -->
   
    <div class="container ">
        <div class="mx-auto ">
            <div class="row no-gutters slider-text text-center align-items-center justify-content-center text-center">
                <div class="col-md-9 ftco-animate">
                    <h1 class="mb-2 bread">{{ $portfolio->title }}</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Portfolio <i class="ion-ios-arrow-forward"></i></span>
                        <span>{{ $portfolio->title }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Portfolio Detail Section -->
    <section class="container">
        <div class="mx-auto">
            <div class="row">
                <div class="col-md-6 ftco-animate">
                    <img src="{{ asset('storage/' . $portfolio->image) }}" class="img-thumbnail" alt="Portfolio Image">
                </div>
                <div class="col-md-6 ftco-animate">
                    <div class="project-info">
                        <h2 class="mb-4">{{ $portfolio->title }}</h2>
                        <p class="mb-4"><strong>Category:</strong> {{ $portfolio->category->name }}</p>
                        <div class="mb-4">
                            <h3>Description</h3>
                            <p>{!! nl2br(e($portfolio->description)) !!}</p>
                        </div>
                        @if($portfolio->link)
                            <p><a href="{{ $portfolio->link }}" class="btn btn-primary py-3 px-4" target="_blank">Visit Project</a></p>
                        @endif
                        <p><a href="{{ route('home') }}" class="btn btn-secondary py-3 px-4">Back to Home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
