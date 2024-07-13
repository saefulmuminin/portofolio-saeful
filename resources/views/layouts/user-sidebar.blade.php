<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar"
    aria-expanded="false" aria-controls="navbar"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
    <div class="text-center">
        <div class="author-img" style="background-image: url('{{ asset('storage/' . $user->avatar) }}'); background-position: center bottom; height: 190px; width: 155px;"></div>
        <h1 id="colorlib-logo"><a href="index.html">{{ $user->name }}</a></h1>
        <span class="position"><a href="#">{{ $user->profesi }}</a> in {{ $user->negara }}</span>
    </div>
    
    <nav id="colorlib-main-menu" role="navigation" class="navbar">
        <div id="navbar" class="collapse">
            <ul>
                <li class="active"><a href="/" data-nav-section="home">Home</a></li>
                <li><a href="#" data-nav-section="about">About</a></li>
                <li><a href="#" data-nav-section="services">Services</a></li>
                <li><a href="#" data-nav-section="skills">Skills</a></li>
                <li><a href="#" data-nav-section="education">Education</a></li>
                <li><a href="#" data-nav-section="experience">Experience</a></li>
                <li><a href="#" data-nav-section="portofolio">Portofolio</a></li>
                <li><a href="#" data-nav-section="certificates">Certificates</a></li>
                <li><a href="#" data-nav-section="contact">Contact</a></li>
            </ul>
        </div>
    </nav>


</aside>
