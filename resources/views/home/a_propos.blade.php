@extends('home.layouts.app')
@section('title', 'A Propos')

@section('content')


<div class="hero-banner" style="background-image: url({{asset('home/images/a_propos3.jpg')}})" id="imageApropos">
  <div class="hero-content">
      <h1 class="hero-title">À Propos d’ASgroupe</h1>
      <p class="hero-subtitle">Découvrez notre histoire, notre mission, et nos valeurs.</p>
             <a href=" {{ route('services') }}" class="hero-btn">Découvrez nos services</a>
  </div>
</div>


<section class="about_section layout_padding">
    <div class="container " >
      <div class="row p-3">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Notre <span> histoire</span>
              </h2>
            </div>
            <p>
                Fondée avec l’ambition de devenir un acteur clé dans plusieurs secteurs stratégiques, ASgroupe s’est imposée comme une entreprise innovante et fiable. Depuis nos débuts, nous nous engageons à offrir des solutions adaptées aux besoins variés de nos clients, qu’il s’agisse de marketing digital, de transit, de commerce international ou de nettoyage.
                Notre parcours est marqué par la satisfaction de nos clients, la construction de partenariats solides, et une constante recherche d’excellence.

            </p>
            {{-- <a href="">
            En savoir plus
            </a> --}}
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('home/images/a_propos1.jpg')}}" alt="">
          </div>
        </div>

      </div>

      <div class="row p-3 ">
        <div class="col-md-6 ">
            <div class="img-box">
              <img src="{{asset('home/images/vision.jpg')}}" alt="">
            </div>
          </div>
        <div class="col-md-6 p-3">
          <div class="detail-box">
            <div class="heading_container">
              <h2 class="pt-3">
                Notre <span> mission</span>
              </h2>
            </div>
            <p>
                Chez ASgroupe, nous visons à fournir des solutions complètes et
                personnalisées pour accompagner nos clients dans leurs projets. Nous croyons en l’innovation, l’excellence,
                 et la proximité comme piliers de notre réussite et celle de nos partenaires.
            </p>
            {{-- <a href="">
            En savoir plus
            </a> --}}
          </div>
        </div>
      </div>

      <div class="row p-3 ">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2 class="pt-3">
                Nos <span>valeurs</span>
              </h2>
            </div>
            <p>
              - <strong class="bold">Innovation </strong>: Toujours à la recherche de solutions modernes et efficaces. <br>
              - <strong class="bold">Engagement</strong> : Une écoute attentive et un service client irréprochable. <br>
              - <strong class="bold">Fiabilité </strong>: Des prestations de qualité, livrées dans les délais convenus. <br>
              - <strong class="bold">Proximité </strong>: Un partenariat basé sur la confiance et la transparence. <br>
            </p>
            {{-- <a href="">
            En savoir plus
            </a> --}}
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('home/images/valeur.jpg')}}" alt="">
          </div>
        </div>

      </div>

      <div class="row p-3 ">
        <div class="col-md-6 ">
            <div class="img-box">
              <img src="{{asset('home/images/about.jpg')}}" alt="">
            </div>
          </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2 class="pt-5">
                Notre <span>vision</span>
              </h2>
            </div>
            <p>
              Devenir un acteur incontournable dans nos domaines d'activité, en offrant à nos clients des services qui
               dépassent leurs attentes et qui contribuent à leur succès.

            </p>
            {{-- <a href="">
            En savoir plus
            </a> --}}
          </div>
        </div>
      </div>

      <div class="row p-3 ">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Pourquoi<span> choisir ASgroupe ?</span>
              </h2>
            </div>
            <p>
              - Une équipe d’experts passionnés et qualifiés. <br>
              -Une approche personnalisée pour chaque projet.  <br>
              - Une combinaison de savoir-faire local et de perspective internationale.
            </p>
             <a href=" {{ route('services') }}">
                Découvrez nos services
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('home/images/choisir.jpg')}}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>


@endsection


