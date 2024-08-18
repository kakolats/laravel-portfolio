@extends("layout.base")

@section("content")
<section id="home-section" class="hero">
    <div class="home-slider  owl-carousel">
        <div class="slider-item ">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_5.png);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Salut!</span>
                            <h1 class="mb-4 mt-3">Je suis <span>Komla Stéphane AKOLATSE</span></h1>
                            <h2 class="mb-4">Un développeur Fullstack</h2>
{{--                            <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_6.png);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Salut!</span>
                            <h1 class="mb-4 mt-3">Je suis <span>un dévéloppeur</span> basé à Dakar</h1>
{{--                            <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch" style="background-image:url(images/bg_5.png);">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">A propos</h1>
                        <h2 class="mb-4">A propos de moi</h2>
                        <p>Je suis un développeur web et mobile avec plus de 2 ans d'expérience, maîtrisant des technologies comme Spring Boot, Laravel, Vue, NodeJs, PHP, Java, C#, JavaScript, TypeScript, Python et Dart. Mon profil GitHub reflète ma passion pour la programmation à travers divers projets. Je gère l'ensemble du cycle de développement, du front-end au back-end, et j'ai une solide expertise en conception et déploiement de réseaux et systèmes. Mon engagement envers l'excellence technique et l'innovation guide ma pratique professionnelle.
                        </p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Nom:</span> <span>Komla Stéphane AKOLATSE</span></li>
                            {{--                            <li class="d-flex"><span>Date of birth:</span> <span>January 01, 1987</span></li>--}}
                            <li class="d-flex"><span>Addresse:</span> <span>Dakar, Sénégal</span></li>
                            <li class="d-flex"><span>Code postal:</span> <span>12500</span></li>
                            <li class="d-flex"><span>Email:</span> <span>akolatse1@gmail.com</span></li>
                            {{--                            <li class="d-flex"><span>Phone: </span> <span>+1-2234-5678-9-0</span></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p><a target="_blank" href="{{ asset('resume/cv.pdf') }}" class="btn btn-primary py-3 px-3">Télécharger mon CV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Expérience</h1>
                <h2 class="mb-4">Expérience professionnelle</h2>
                {{--                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="resume-wrap ftco-animate">
                    <span class="date">Sept 2022 -</span>
                    <h2>Développeur Fullstack Freelance</h2>
                    <span class="position">Link Brand You</span>
                    <p class="mt-4">Missions et compétences : </p>
                    <ul>
                        <li>Mise en place de solutions digitales</li>
                        <li>Développement Web des solutions</li>
                        <li>Mise en production</li>
                    </ul>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">Oct 2022 -</span>
                    <h2>Développeur FullStack Freelance</h2>
                    <span class="position">Agence CAURIS</span>
                    <p class="mt-4">Développement Web Freelance : </p>
                    <ul>
                        <li>Etude et cadrage du projet</li>
                        <li>Développent d'applications Web</li>
                        <li>Mise en production</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="resume-wrap ftco-animate">
                    <span class="date">Sept 2023 - Nos jours</span>
                    <h2>Software Engineer</h2>
                    <span class="position">Axone SA</span>
                    <p class="mt-4">Développement logiciel : </p>
                    <p>En tant qu'ingénieur logiciel, je conçois, développe et teste des logiciels, en m'assurant de leur efficacité, de leur réutilisabilité, et de l'intégration des technologies modernes.</p>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">Octobre 2023 - Nos jours</span>
                    <h2>Développeur Wordpress</h2>
                    <span class="position">Bold Agency</span>
                    <p class="mt-4">Développement Web : </p>
                    <p>En tant que développeur WordPress, je crée et personnalise des sites web en utilisant la plateforme WordPress, en m'assurant qu'ils sont à la fois esthétiques et fonctionnels.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a target="_blank" href="{{ asset('resume/cv.pdf') }}" class="btn btn-primary py-4 px-5">Télécharger mon CV</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Formation</h1>
                <h2 class="mb-4">Formation</h2>
                {{--                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>--}}
            </div>
        </div>
        <div class="col">
            <div class="col-md-12">
                <div class="resume-wrap ftco-animate">
                    <span class="date">2019 - 2022</span>
                    <h2>Licence en génie logiciel - Réseaux et systèmes</h2>
                    <span class="position">Institut Supérieur de Management de Dakar</span>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">2020 - 2022</span>
                    <h2>Licence en Informatique</h2>
                    <span class="position">Institut Universitaire Champollion</span>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">2022 - </span>
                    <h2>Master en conception et développement de solutions digitales</h2>
                    <span class="position">Institut Supérieur de Management de Dakar</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Services</h1>
                <h2 class="mb-4">Services</h2>
{{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center d-flex ftco-animate">
                <a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
                    <div class="desc">
                        <h3 class="mb-5">Développement de sites Web</h3>
                    </div>
                </a>
            </div>

            <div class="col-md-4 text-center d-flex ftco-animate">
                <a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
                    <div class="desc">
                        <h3 class="mb-5">Développement d'applications mobiles multi-plateformes</h3>
                    </div>
                </a>
            </div>

            <div class="col-md-4 text-center d-flex ftco-animate">
                <a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
                    <div class="desc">
                        <h3 class="mb-5">Conception de maquettes UI</h3>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>


<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Compétences</h1>
                <h2 class="mb-4">Mes compétences</h2>
                {{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Angular</h3>
                    <div class="progress">
                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="60" style="width:60%">
                            {{--                            <span>90%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Spring Boot</h3>
                    <div class="progress">
                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            {{--                            <span>85%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Symfony/Laravel</h3>
                    <div class="progress">
                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                             aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            {{--                            <span>95%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Flask</h3>
                    <div class="progress">
                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100" style="width:65%">
                            {{--                            <span>90%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>WordPress</h3>
                    <div class="progress">
                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            {{--                            <span>70%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Shopify</h3>
                    <div class="progress">
                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            {{--                            <span>70%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>NodeJs</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:75%">
                            {{--                            <span>80%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Oracle, SQL Server, MySQL, PostgreSQL</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:55%">
                            {{--                            <span>80%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Data Visualisation (Pandas,Matplotlib)</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:55%">
                            {{--                            <span>80%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Python</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            {{--                            <span>80%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Dart/Flutter</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            {{--                            <span>80%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Vue</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            {{--                            <span>80%</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Projets</h1>
                <h2 class="mb-4">Mes projets</h2>
                {{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
            </div>
        </div>
        <div class="row">
            @foreach($projects as $project)
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="{{route("projects.show",["id"=>$project->id])}}">{{$project->title}}</a></h3>
                        <span>{{$project->type}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container">
{{--        <div class="row d-md-flex align-items-center">--}}
{{--            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                <div class="block-18">--}}
{{--                    <div class="text">--}}
{{--                        <strong class="number" data-number="100">0</strong>--}}
{{--                        <span>Awards</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                <div class="block-18">--}}
{{--                    <div class="text">--}}
{{--                        <strong class="number" data-number="1200">0</strong>--}}
{{--                        <span>Complete Projects</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                <div class="block-18">--}}
{{--                    <div class="text">--}}
{{--                        <strong class="number" data-number="1200">0</strong>--}}
{{--                        <span>Happy Customers</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                <div class="block-18">--}}
{{--                    <div class="text">--}}
{{--                        <strong class="number" data-number="500">0</strong>--}}
{{--                        <span>Cups of coffee</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>

<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">
                <h2>Je suis<span> disponible</span> pour du freelancing</h2>
                {{--                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">M'engager</a></p>--}}
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4">Me joindre</h2>
{{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
            </div>
        </div>

        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-4">Addresse</h3>
                    <p>Dakar, Sénégal</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-4">Numéro de téléphone</h3>
                    <p><a href="tel://1234567920">+221 77 347 31 07</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-4">Adresse Mail</h3>
                    <p><a href="mailto:info@yoursite.com">akolatse1@gmail.com</a></p>
                </div>
            </div>

        </div>

        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-4 p-md-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre Nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre Prenom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sujet">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div class="img" style="background-image: url(images/about.jpg);"></div>
            </div>
        </div>
    </div>
</section>
@endsection
