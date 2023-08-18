<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Accueil</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


    <!-- Styles -->

</head>
<x-app-layout>
    <main class="accueil">

        <body>

            <div class="hero">
                <h1 class="titre_accueil">The Secret Beauty</h1>
                <h2 class="sous_titre_accueil">soins de beauté et bien-être</h2>
            </div>
            <div class="partie_1">

                <div class="services">
                    <div class="service1">
                        <img src="{{ url('/img/Service1.jpg') }}">
                        <h2>Blanchiment dentaire</h2>
                    </div>
                    <div class="service2">
                        <img src="{{ url('/img/Service2.jpg') }}">
                        <h2>Presso thérapie</h2>
                    </div>
                    <div class="service3">
                        <img src="{{ url('/img/Service3.jpg') }}">
                        <h2>Soins hydra-facial</h2>
                    </div>
                </div>
            </div>

            <div class="contenenair_partie_2">
                <div class="partie_2">
                    <div class="texte_partie_2">
                        <h1 class="titre_partie_2">NOS PRESTATIONS<h1>
                                <p classe="texte_2">Notre souhait premier est de vous offrir un service d’une qualité
                                    irréprochable, c’est pourquoi, chez WHITE BEAUTY, <br>nous travaillons avec des
                                    équipements à la pointe de l’innovation.</p>
                                <button>
                                    <a href="{{ url('/nos_services') }}"></a>
                                </button>
                    </div>
                </div>
            </div>
            <div class="image_partie_2">
                <div class="container">
                    <div class="overlay">
                        <div class="items">
                            <div class="items head">
                                <p>Blanchiment Dentaire</p>
                                <hr>
                            </div>
                            <div class="items price">
                                <p class="old">Découvrez le secret d'un sourire éclatant avec le blanchiment dentaire
                                    de Seret Beauty. Notre traitement révolutionnaire offre une solution efficace pour
                                    illuminer votre sourire et éliminer les taches indésirables. Grâce à des agents
                                    spécialement formulés comme le peroxyde d'hydrogène, nos produits pénètrent en
                                    profondeur dans l'émail dentaire pour éliminer les décolorations et révéler la
                                    blancheur naturelle de vos dents.</p>
                            </div>
                            <div class="items cart">
                            </div>
                        </div>
                        <div class="items">
                            <div class="items head">
                                <p></p>
                            </div>
                            <div class="items price">
                                <p></p>
                                <p></p>
                            </div>
                            <div class="items cart">
                                <a href="#" class="bouton">En savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container2">
                    <div class="overlay2">
                        <div class="items2">
                            <div class="items head">
                                <p>Présso thérapie</p>
                                <hr>
                            </div>
                            <div class="items price2">
                                <p class="old">Découvrez le bien-être total avec la pressothérapie de Seret Beauty.
                                    Notre traitement de pointe vous transporte dans un monde de relaxation profonde et
                                    de revitalisation. En utilisant des techniques de compression pneumatique avancées,
                                    la pressothérapie stimule la circulation sanguine et lymphatique, favorisant ainsi
                                    l'élimination des toxines et la réduction de la rétention d'eau.</p>
                                <p></p>
                            </div>
                            <div class="items cart2">
                            </div>
                        </div>
                        <div class="items2">
                            <div class="items head2">
                                <p></p>
                            </div>
                            <div class="items cart2">
                                <a href="#" class="bouton">En savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container3">
                    <div class="overlay3">
                        <div class="items3">
                            <div class="items head">
                                <p>Soins hydra facial</p>
                                <hr>
                            </div>
                            <div class="items price3">
                                <p class="old">Découvrez l'ultime expérience de rajeunissement de la peau avec les
                                    soins HydraFacial de Seret Beauty. Plongez dans une oasis de soins luxueux conçus
                                    pour révéler votre beauté intérieure et vous faire rayonner de confiance.
                                    Les soins HydraFacial sont bien plus qu'un simple traitement facial. C'est une
                                    fusion magique entre la science et le bien-être, offrant une transformation visible
                                    et une sensation revitalisante.</p>
                                <p></p>
                            </div>
                            <div class="items cart3">
                            </div>
                        </div>
                        <div class="items3">
                            <div class="items head3">
                                <p></p>
                            </div>
                            <div class="items price3">
                                <p></p>
                                <p></p>
                            </div>
                            <div class="items cart3">

                                <a href="#" class="bouton">En savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container4">
                    <div class="overlay4">
                        <div class="items4">
                            <div class="items head">
                                <p>Nos Formules</p>
                                <hr>
                            </div>
                            <div class="items price4">
                                <p class="old4">Chez Seret Beauty, nous vous invitons à vivre une expérience de soins
                                    exceptionnelle, où l'art et la science se rejoignent pour révéler votre véritable
                                    éclat intérieur. Nos prestations exclusives, comprenant le blanchiment dentaire
                                    avancé, la sensationnelle pressothérapie et les soins d'HydraFacial de renommée
                                    mondiale, vous offrent un voyage complet vers la confiance et la beauté.</p>
                                <p></p>
                            </div>
                            <div class="items cart4">
                            </div>
                        </div>
                        <div class="items4">
                            <div class="items head">
                                <p></p>
                            </div>
                            <div class="items price3">
                                <p class="old"></p>
                                <p></p>
                            </div>
                            <div class="items cart4">

                                <a href="#" class="bouton">En savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="espaceur"></div>
            <div class="baniere">
                <h1 class="titre_banniere">Vous venez nous voir régulièrement ?</h1>
                <p class="texte_baniere">Profitez de vos avantages fidélité dès maintenant !</p>
                <div class="btn_center">
                    <a href="#" class="bouton2">Découvrir</a>
                </div>
            </div>
            <!-- affichage de 3 articles -->
            <div class="partie_3">

                <h2 class="titre_partie3">Nos derniers articles</h2>

                <div class="espaceur"></div>

                @if ($post->isNotEmpty())
                    <ul>
                        @foreach ($post as $post)
                            <li>
                                <div class="posts">
                                    <h3 class="">{{ Str::limit($post->title, 70) }}</h3>
                                    <img src="{{ asset('/storage/' . $post->image) }}" class="img_article">
                                    <p>{{ Str::limit($post->content, 15) }}</p>
                                    <a href="{{ route('posts.show', $post) }}" class="bouton3">en savoir +</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </div>
            <!-- Footer -->
            @include('layouts.footer')
        </body>
    </main>

</html>

</x-app-layout>
