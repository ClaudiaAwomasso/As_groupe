@extends('home.layouts.app')
@section('title', 'Accueil')
@section('content')

    <!-- slider section -->

    <!-- end slider section -->

  <div class="hero-banner">
    <div class="hero-content">
        <h1 class="hero-title">Bienvenue chez ASgroupe</h1>
        <p class="hero-subtitle">Votre partenaire dans le Marketing Digital, Transit, Commerce International, et Nettoyage</p>
        <a href="{{ route('services') }}" class="hero-btn">Découvrez nos services</a>
    </div>
</div>




  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            Nos <span> Services</span>
          </h2>
          <p>

              Nous vous proposons une gamme variée de services, soigneusement adaptés à vos besoins dans divers domaines :
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('home/images/marketing.jpg') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                    Marketing digital
                </h5>
                <p>
                    Création de sites web, gestion

                     des réseaux sociaux, SEO.
                </p>
                <a href="{{ route('services') }}">
                 Lire la suite
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('home/images/commerce.jpg') }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                    Transit
                </h5>
                <p>
                    Transport de marchandises et formalités douanières.
                </p>
                <a href="{{ route('services') }}">

                    Lire la suite
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img  src="{{asset('home/images/commerce1.jpg') }}" alt="" >
              </div>
              <div class="detail-box">
                <h5>
                    Commerce international
                </h5>
                <p>
                    Import/export, études de marché, partenariats permettent de faciliter les échanges commerciaux.
                </p>
                <a href="{{ route('services') }}">
                    Lire la suite
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('home/images/nettoyage.jpg')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                    Nettoyage
                </h5>
                <p>
                   Nettoyage industriel, désinfection, entretien des burreaux.
                </p>
                <a href="{{ route('services') }}">
                    Lire la suite
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Qui  <span>Sommes-nous</span>
              </h2>
            </div>
            <p>
             <strong> ASgroupe</strong> est une entreprise multidisciplinaire spécialisée dans les domaines du marketing digital, du transit,
                du commerce international et du nettoyage. Notre objectif est de fournir des solutions innovantes et adaptées
                pour répondre aux besoins spécifiques de nos clients.
            </p>
            <a href="{{ route('a_propos') }}">
            En savoir plus
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('home/images/about.jpg')}}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->
  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Avis<span> Clients</span>
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Grâce à AS Groupe, notre stratégie marketing a complètement changé. Leur équipe a su comprendre nos besoins et a proposé des solutions innovantes pour attirer de nouveaux clients. Aujourd’hui, notre marque est beaucoup plus visible et nos ventes ont augmenté de manière significative.
                     Nous recommandons vivement leurs services pour leur professionnalisme et leur créativité.
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="{{asset('home/images/img3.png')}}" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      H.Jonas
                    </h6>

                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                   Nous avons fait appel à AS Groupe pour un nettoyage industriel, et le résultat a dépassé nos attentes. Leur équipe est arrivée à l’heure, équipée et prête à intervenir. Chaque recoin a été nettoyé avec une attention incroyable aux détails.
                   Non seulement ils ont fait un travail impeccable, mais ils l'ont fait rapidement et efficacement.
                    Nous les choisirons sans hésiter pour nos besoins futurs.
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    {{-- <img src="{{asset('home/images/img2.png')}}" alt="" class="img-1"> --}}
                  </div>
                  <div class="name">
                    <h6>
                      B.Dorcas
                    </h6>

                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    AS Groupe a été un partenaire clé dans la gestion de nos opérations commerciales.
                     Ils ont aidé à simplifier notre logistique et à négocier des accords avec nos fournisseurs locaux.
                      Leur connaissance du marché et leur approche proactive ont fait toute la différence.
                     Nous sommes aujourd’hui mieux organisés et nos marges bénéficiaires se sont considérablement améliorées.
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    {{-- <img src="{{asset('home/images/img1.png')}}" alt="" class="img-1"> --}}
                  </div>
                  <div class="name">
                    <h6>
                      A.Paul
                    </h6>

                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                   En travaillant avec AS Groupe pour nos besoins de transit, nous avons découvert une entreprise à la fois fiable et efficace.
                    Ils ont pris en charge toutes les formalités douanières et logistiques, nous évitant ainsi des retards coûteux.
                     Leur service client est impeccable et toujours disponible pour répondre à nos questions.
                    AS Groupe est un véritable partenaire de confiance pour le commerce international.
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    {{-- <img src="{{asset('home/images/client-2.png')}}" alt="" class="img-1"> --}}
                  </div>
                  <div class="name">
                    <h6>
                      Sophie.J
                    </h6>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="heading_container">
            <h2>
           Nous-contactez
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 offset-md-1">
          <div class="form_container contact-form">
            <form action="">
              <div>
                <input type="text" placeholder="Votre nom et prénom" />
              </div>
              <div>
                <input type="text" placeholder="Numéro de téléphone" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  ENVOYER
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 px-0">
         <div>
              <img class="imagetel" src="{{asset('home/images/contact.jpg')}}" alt="">
         </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  @endsection
