@extends("layout.base")

@section("content")
    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
                    <h2 class="mb-3 bread">{{$project->title}}</h2>
{{--                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <h2 class="mb-3">Description</h2>
                    <p>{{$project->description}}</p>
                    <h2 class="mb-3 mt-5">Problématiques</h2>
                    <p>{{$project->problematiques}}</p>
                    <h2 class="mb-3 mt-5">Compétences développées</h2>
                    <p>{{$project->competences}}</p>
                    <br>
                    <p>Lien vers le projet : <a href="{{$project->link}}">{{$project->link}}</a></p>
                </div> <!-- .col-md-8 -->

            </div>
        </div>
    </section> <!-- .section -->
@endsection
