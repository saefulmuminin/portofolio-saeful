@extends('layouts.user')

@section('app')
    <section class="colorlib-work" data-section="portfolio">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">Portfolio Detail</span>
                    <h2 class="colorlib-heading">Project Details</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('storage/' . $portfolio->image) }});">
                        <div class="desc">
                            <div class="con">
                                <h3>{{ $portfolio->title }}</h3>
                                <span class="category">{{ $portfolio->category->name }}</span>
                                <p>{{ $portfolio->description }}</p>
                                @if ($portfolio->link)
                                    <p class="icon">
                                        <span><a href="{{ $portfolio->link }}" target="_blank"><i class="icon-link"></i> Visit Website</a></span>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                    <div class="project-details">
                        <h3>Project Details</h3>
                        <p>{{ $portfolio->description }}</p>
                        <p><strong>Category:</strong> {{ $portfolio->category->name }}</p>
                        @if ($portfolio->link)
                            <p><strong>Link:</strong> <a href="{{ $portfolio->link }}" target="_blank">{{ $portfolio->link }}</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
