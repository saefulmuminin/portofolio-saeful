@extends('layouts.user')

@section('app')
    <section id="colorlib-hero" class="js-fullheight" data-section="home">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                @foreach ($heroSliders as $slider)
                    <li style="background-image: url({{ asset('storage/' . $slider->background_image) }});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div
                                    class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner js-fullheight">
                                        <div class="desc">
                                            <h1>{{ $slider->title }}</h1>
                                            <h2>{{ $slider->subtitle }}</h2>
                                            @if ($slider->button_text && $slider->button_url)
                                                <p><a href="{{ $slider->button_url }}" class="btn btn-primary btn-learn"
                                                        download>{{ $slider->button_text }} <i
                                                            class="icon-download4"></i></a></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="colorlib-about" data-section="about">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="col-md-12">
                            <div class="about-desc">
                                <span class="heading-meta">About Us</span>
                                <h2 class="colorlib-heading">Who Am I?</h2>
                                <p><strong>I am</strong> {{ $aboutUs->heading }}</p>
                                <p>{{ $aboutUs->content }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                            <div class="services color-1">
                                <span class="icon2"><i class="icon-code"></i></span>
                                <h3>Full Stack Web Developer</h3>
                            </div>
                        </div>
                        <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                            <div class="services color-4">
                                <span class="icon2"><i class="icon-globe-outline"></i></span>
                                <h3>Frontend Development</h3>
                            </div>
                        </div>
                        <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                            <div class="services color-3">
                                <span class="icon2"><i class="icon-data"></i></span>
                                <h3>Backend Development</h3>
                            </div>
                        </div>
                        <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                            <div class="services color-2">
                                <span class="icon2"><i class="icon-bulb"></i></span>
                                <h3>Graphic And Web Design</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="colorlib-services" data-section="services">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">What I do?</span>
                    <h2 class="colorlib-heading">Here are some of my expertise</h2>
                </div>
            </div>
            <div class="row row-pt-md">
                @foreach ($services as $service)
                    <div class="col-md-4 text-center animate-box">
                        <div class="services color-{{ $loop->iteration }}">
                            <span class="icon">
                                <i class="{{ $service->icon }}"></i>
                            </span>
                            <div class="desc">
                                <h3>{{ $service->title }}</h3>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="colorlib-skills" data-section="skills">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">My Specialty</span>
                    <h2 class="colorlib-heading animate-box">My Skills</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <p>I specialize in crafting seamless digital experiences that blend creativity with functionality. From
                        concept to execution, I bring expertise in creating intuitive user interfaces and robust backend
                        solutions. My dedication to detail ensures every project meets high standards of design and
                        performance.</p>
                </div>
                @foreach ($skills as $skill)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="progress-wrap">
                            <h3>{{ $skill->name }}</h3>
                            <div class="progress">
                                <div class="progress-bar color-{{ $loop->index + 1 }}" role="progressbar"
                                    aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width: {{ $skill->percentage }}%">
                                    <span>{{ $skill->percentage }}%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="colorlib-education" data-section="education">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">Education</span>
                    <h2 class="colorlib-heading animate-box">Education</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="fancy-collapse-panel">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach ($educations as $education)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading{{ $loop->index }}">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse{{ $loop->index }}"
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $loop->index }}">
                                                {{ $education->degree }} - {{ $education->university }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{ $loop->index }}"
                                        class="panel-collapse collapse {{ $loop->first ? 'in' : '' }}" role="tabpanel"
                                        aria-labelledby="heading{{ $loop->index }}">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p>{{ \Illuminate\Support\Str::limit($education->description, 150) }}
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Graduated in {{ $education->graduation_year }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="colorlib-experience" data-section="experience">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">Experience</span>
                    <h2 class="colorlib-heading animate-box">Work Experience</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="timeline-centered">
                        @foreach ($experiences as $experience)
                            <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                <div class="timeline-entry-inner">
                                    <div class="timeline-icon color-{{ $loop->index }}">
                                        <i class="icon-pen2"></i>
                                    </div>
                                    <div class="timeline-label">
                                        <h2><a href="#">{{ $experience->title }}</a>
                                            <span>{{ \Carbon\Carbon::parse($experience->start_date)->isoFormat('D MMM YYYY') }}
                                                -
                                                {{ \Carbon\Carbon::parse($experience->end_date)->isoFormat('D MMM YYYY') }}</span>
                                        </h2>
                                        <p>{{ $experience->description }}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        <!-- Example entry structure -->


                        <!-- Add your actual experience entries dynamically here -->

                        <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon color-none"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="colorlib-portofolio" data-section="portofolio">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">My Portfolio</span>
                    <h2 class="colorlib-heading animate-box">Recent Portfolio</h2>
                </div>
            </div>
            <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                <div class="col-md-12">
                    <p class="work-menu">
                        @foreach ($portfolioCategories as $category)
                            <span><a href="#"
                                    class="portfolio-filter @if (request()->query('category') == $category->id) active @endif"
                                    data-category="{{ $category->id }}">{{ $category->name }}</a></span>
                        @endforeach
                    </p>
                </div>
            </div>



            <div class="row" id="portfolio-container">
                @foreach ($portfolios as $portfolio)
                    <div class="col-md-6 animate-box portfolio-item" data-category="{{ $portfolio->category->id }}"
                        data-animate-effect="fadeInLeft">
                        <div class="project"
                            style="background-image: url({{ asset('storage/' . $portfolio->image) }}); background-size: cover; background-position: center; width: auto; height: 400px; box-shadow: rgba(100, 100, 111, 0.2); border-radius: 10px;">
                            <div class="desc">
                                <div class="con">
                                    <h3><a href="{{ route('user.show', $portfolio->title) }}">{{ $portfolio->title }}</a>
                                    </h3>
                                    <span>{{ $portfolio->category->name }}</span>
                                    <p class="mt-3 text-white">
                                        {{ \Illuminate\Support\Str::words($portfolio->description, 20, '...') }}</p>
                                    <div class="btn-group mt-3">
                                        @if ($portfolio->link)
                                            <a href="{{ $portfolio->link }}" class="btn btn-behance" target="_blank"
                                                style="background-color: #3d5cb2; color: #fff;">Visit Link</a>
                                        @endif
                                        <a href="{{ route('user.show', $portfolio->title) }}" class="btn btn-secondary"
                                            style="background-color: #333; color: #fff;">Lihat Detail</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>




    <section class="colorlib-portfolio" data-section="certificates">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">My Certificates</span>
                    <h2 class="colorlib-heading animate-box">Recent Certificates</h2>
                </div>
            </div>
            <div class="row" id="portfolio-container">
                @foreach ($certificates as $certificate)
                    <div class="col-md-6 animate-box portfolio-item" data-animate-effect="fadeInLeft">
                        <div class="project" data-toggle="modal" data-target="#imageModal{{ $loop->index }}">
                            <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}" class="img-fluid"
                                 style="width: 100%; height: 250px; object-fit: cover; box-shadow: rgba(100, 100, 111, 0.2); border-radius: 10px;">
                        </div>
                    </div>
    
                    <!-- Modal -->
                    <div class="modal fade" id="imageModal{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $loop->index }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}" class="img-fluid" style="max-width: 100%; max-height: 80vh;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    


    <section class="colorlib-contact" data-section="contact">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">Get in Touch</span>
                    <h2 class="colorlib-heading">Contact</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-globe-outline"></i>
                        </div>
                        <div class="colorlib-text">
                            <p><a href="mailto:">{{ $user->email }}</a></p>
                        </div>
                    </div>

                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="colorlib-text">
                            <p>cilengusi kab.bogor jawa barat </p>
                        </div>
                    </div>

                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="colorlib-text">
                            <p><a href="tel://">+6285798864579</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box"
                            data-animate-effect="fadeInRight">
                            <form action="{{ route('send.message') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject"
                                        required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-send-message">Send Message</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterLinks = document.querySelectorAll('.portfolio-filter');
                const portfolioItems = document.querySelectorAll('.portfolio-item');

                filterLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const categoryId = this.dataset.category;

                        portfolioItems.forEach(item => {
                            if (categoryId === 'all' || item.dataset.category === categoryId) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        });

                        filterLinks.forEach(link => link.classList.remove('active'));
                        this.classList.add('active');
                    });
                });
            });


            document.addEventListener('DOMContentLoaded', function() {
                const categoryLinks = document.querySelectorAll('.portfolio-filter');

                categoryLinks.forEach(link => {
                    link.addEventListener('click', function(event) {
                        event.preventDefault();

                        // Remove active class from all links
                        categoryLinks.forEach(link => link.classList.remove('active'));

                        // Add active class to the clicked link
                        this.classList.add('active');

                        // Optionally, you can handle filtering logic here
                        const categoryId = this.getAttribute('data-category');
                        // Implement your filtering logic based on the categoryId
                    });
                });
            });
        </script>
    @endpush
@endsection
