@extends('layouts.main')
    @section('container')
    <!-- Corousel -->
    <div class="container container-coursel">
        <div id="carouselExampleCaptions" class="carousel slide ml-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
            <!-- img1 -->
            <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/img1.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <!-- img2 -->
            <div class="carousel-item">
            <img src="assets/img2.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <!-- img3 -->
            <div class="carousel-item">
            <img src="assets/img3.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
            <!-- img4 -->
            <div class="carousel-item">
            <img src="assets/img4.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <!-- img5 -->
            <div class="carousel-item">
            <img src="assets/img6.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
        </div>
        <!-- img last -->
    </div>
    
    <!-- last corousel -->

    <!-- Category -->
    <div class="container mt-5">
        <div class="title-category">
            <h5 class="text-center">Category</h5>
        </div>
        <!-- Veanue -->
        <div class="row text-center row-container mt-2">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/signs.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Veanue</p>
                </div>
            </div>
            <!-- Entertainment -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/confetti.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Entertainment</p>
                </div>
            </div>
            <!-- Makeup -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/make-up.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Makeup </p>
                </div>
            </div>
            <!-- accessories -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/jewelry.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Accessories</p>
                </div>
            </div>
            <!-- catering -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/catering.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Catering</p>
                </div>
            </div>
            <!-- photography -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/photography.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Photography</p>
                </div>
            </div>
            <!-- fashion -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/fashion-design.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Fashion</p>
                </div>
            </div>
            <!-- Souvenir -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/souvenir.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Souvenir</p>
                </div>
            </div>
            <!-- thema -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/thema.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Thema</p>
                </div>
            </div>
            <!-- Wedding planner -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/Planner.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Planner</p>
                </div>
            </div>
            <!-- Decoration -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/decoration.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Decoration</p>
                </div>
            </div>
            <!-- Invitation -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-category">
                    <a href="#"><img src="assets/category/Invite.png" alt="" class="img-category mt-4"></a>
                    <p class="mt-2">Invitation</p>
                </div>
            </div>

        </div>
    </div>
    <!-- Last category -->
    @endsection