<!-- footer section -->

 <!-- info section -->

 <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4 style="color: #FEF104">
                Adresse
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                    Localisation :
                    <br>
                    Nous sommes situés à Abomey-Calavi, quartier Tokpa Zoungo, 5ᵉ von en partant de la gare routière du carrefour IITA, dans le premier immeuble de cinq étages.

                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Tel : +229 0157830591 / 0143126082
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : asgroupe12@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4 style="color: #FEF104">
              Info
            </h4>
            <p>
                Notre site a été conçu pour refléter notre engagement envers l'excellence et pour offrir à nos visiteurs une expérience fluide et intuitive.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4 style="color: #FEF104">
              Liens
            </h4>
            <div class="info_links">
              <a class="active" href="{{ route('accueil') }}">
                <img src="images/nav-bullet.png" alt="">
                Accueil
              </a>
              <a class="" href="{{ route('a_propos') }}">
                <img src="images/nav-bullet.png" alt="">
                À Propos
              </a>
              <a class="" href="{{ route('services') }}">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="{{ route('contact') }}">
                <img src="images/nav-bullet.png" alt="">
                Contactez-nous
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4 style="color: #FEF104">
            Abonnez-vous
          </h4>
          <form action="#">
            <input type="text" placeholder="Saisissez votre email" />
            <button type="submit">
                S'abonner
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
<section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span>
        <a href="{{ route('accueil')}}">ASgroupe</a>. <a href="">Tous droits réservés.</a>
      </p>
    </div>
  </section>
  <!-- footer section -->
