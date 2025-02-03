@extends('home.layouts.app')
@section('title', 'A Propos')
@section('content')



<div class="hero-banner" style="background-image: url({{asset('home/images/services.jpg')}});background-position:10,15" id="imageApropos">
    <div class="hero-content">
        <h1 class="hero-title">Nos services</h1>
       <p style="font-size: 20px">ASgroupe met à votre disposition une gamme variée de services adaptés à vos besoins</p>

               {{-- <a href="#services" class="hero-btn">Découvrez nos services</a> --}}
    </div>
  </div>


  <section class="services_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="detail-box">
            <div class="heading_container text-center">
              <h2 style="color: #2149A6">
                Découvrez nos domaines d’expertise
              </h2>
            </div>
            {{-- <p>
              ASgroupe offre une gamme variée de services pour répondre aux besoins de ses clients. Nous sommes spécialisés dans plusieurs domaines stratégiques, chacun soutenu par une expertise approfondie et une approche sur mesure.
            </p> --}}
          </div>
        </div>


      <!-- Service 1: Marketing Digital -->
      <div class="row p-3">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('home/images/marketing.jpg')}}" alt="Marketing Digital">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2 class="p-3">
                Marketing <span>Digital</span>
              </h2>
            </div>
            <p style="font-size: 19px">
              Nous aidons les entreprises à améliorer leur visibilité en ligne grâce à des solutions innovantes et des stratégies personnalisées.
            </p>
            <ul>
              <li><span style="font-weight: bold; color: black;">Création de sites vitrines et e-commerce</span> : Sites modernes, responsives, et optimisés pour le référencement.</li>
              <li><span style="  font-weight: bold;color:black ">Gestion des réseaux sociaux</span> : Stratégie, création de contenu, et animation de vos comptes (Facebook, Instagram, LinkedIn). </li>
              <li><span style="font-weight: bold ; color:black">Campagnes publicitaires </span>: Publicités ciblées pour augmenter votre visibilité et vos ventes en ligne.</li>

            </ul>
          </div>
        </div>
      </div>

      <!-- Service 2: Transit -->
      <div class="row p-3">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Services de <span>Transit</span>
              </h2>
            </div>
            <p>
              Nous facilitons le transport et la logistique de vos marchandises grâce à une expertise complète et des solutions adaptées.
            </p>
            <ul>
              <li><span style="font-weight: bold ; color:black">Formalités douanières :</span> Gestion complète de vos démarches administratives.</li>
              <li><span style="font-weight: bold ; color:black">Conseils en logistique :</span> Optimisation des coûts et des délais.</li>
              <li><span style="font-weight: bold ; color:black">Transport de marchandises : </span> National et international, rapide et sécurisé.</li>
              <li><span style="font-weight: bold ; color:black">Suivi et traçabilité des marchandises.</span></li>

            </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('home/images/transit.jpg')}}" alt="Services de Transit">
          </div>
        </div>
      </div>

      <!-- Service 3: Commerce International -->
      <div class="row p-3">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('home/images/commerce.jpg')}}" alt="Commerce International">
          </div>
        </div>

        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2 class="p-4">
                Commerce <span>International</span>
              </h2>
            </div>
            <p style="font-size: 15px">
              Nous accompagnons nos clients dans le développement de leurs activités commerciales à l’international.
            </p>
            <ul>
              <li><span style="font-weight: bold ; color:black">Import-export :</span> Accompagnement complet pour vos échanges commerciaux. </li>
              <li><span style="font-weight: bold ; color:black">Partenariats internationaux :</span> Mise en relation avec des partenaires fiables.  </li>
              <li><span style="font-weight: bold ; color:black">Études de marché :</span> Analyse des opportunités dans les marchés étrangers.</li>
              <li><span style="font-weight: bold ; color:black">Négociations commerciales :</span> Stratégies pour maximiser vos profits. </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Service 4: Nettoyage Professionnel -->
      <div class="row p-3">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Nettoyage <span>Professionnel</span>
              </h2>
            </div>
            <p>
                Profitez d’un environnement propre et sain grâce à nos services professionnels :
            </p>
            <ul>
              <li><span style="font-weight: bold ; color:black">Nettoyage de bureaux :</span> Prestations adaptées à votre espace de travail.</li>
              <li><span style="font-weight: bold ; color:black">Nettoyage industriel : </span>Hygiène et entretien des installations spécifiques. </li>
            <li><span style="font-weight: bold ; color:black"> Désinfection :</span> Protocoles rigoureux pour un environnement sans risques. </li>
            <li><span style="font-weight: bold ; color:black">Entretien des espaces verts :</span> Jardinage et maintenance paysagère.</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('home/images/nettoyage2.jpg')}}" alt="Nettoyage Professionnel">
          </div>
        </div>
      </div>
    </div>
                <p>
                     Besoin d’un service spécifique ? Faites appel à notre expertise pour des solutions personnalisées et adaptées à vos besoins.

                   </p>
                   <br>
                   <a href="{{ route('contact') }}" class="hero-btn" style=" background-color: #FEF104; color: #2149A6;">Demandez un devis</a>
  </section>


@endsection
