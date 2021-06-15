@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>I nostri dottori</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>su di noi</h2>
          <p>BDoctors nasce per mettere a disposizione uno strumento in grado di aiutare l’utente nella ricerca del miglior medico o dentista nella propria città, facilitando il contatto tra paziente e dottore, e semplificando il processo di prenotazione.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <img src="assets/img/doc-about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-up">
            <h3>La scelta del medico giusto è una decisione importante</h3>
            <p class="font-italic">
              Con BDoctors puoi trovare lo specialista di cui hai bisogno intorno a te e prenotare una visita 24 ore su 24.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Recensioni dei pazienti.</li>
              <li><i class="icofont-check-circled"></i> Visite mediche in studio o consulti online.</li>
              <li><i class="icofont-check-circled"></i> Possibilità di mandare messaggi privati al tuo medico e di gestire il consulto in autonomia.</li>
            </ul>
            <p>
              Parla con uno specialista in qualsiasi momento e luogo attraverso il videoconsulto. Collegati da PC, tablet o smartphone in totale sicurezza. Potrai condividere referti e documenti, ricevere una seconda opinione e discutere delle tue condizioni di salute in tempo reale.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    {{--
        <!-- ======= About Us Section ======= -->
     

       <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="icofont-heart-beat"></i></div>
                <h4 class="title">Controlli periodici</h4>
                <p class="description">La cura della tua salute è sempre più semplice grazie alla facilità di prenotazione</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="icofont-drug"></i></div>
                <h4 class="title">La cura giusta per te</h4>
                <p class="description">L'attenzione del paziente è sempre al primo posto</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="icofont-thermometer-alt"></i></div>
                <h4 class="title">Prenota i tuoi esami</h4>
                <p class="description">Contatta direttamente il medico per avere i tuoi esami di laboratorio</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-dna-alt-1"></i></div>
                <h4 class="title">Tutti gli specialisti che cerchi</h4>
                <p class="description">Trova il tuo medico per provincia, specializzazione o prestazione</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Featured Services Section -->

      <!-- ======= Performances Section ======= -->
      <section id="performance" class="performance">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-right">
              <h3>Scegli come e quando parlare con il tuo dottore, in tutta riservatezza</h3>           
              <ul>
                <li><i class="ms-icons icofont-ui-browser"></i></li>
                <li><i class="ms-icons icofont-ui-touch-phone"></i></li>
                <li><i class="ms-icons icofont-ui-text-loading"></i></li>
              </ul>
              <p>
                In videochiamata da casa o in hotel, da telefono o computer, e sempre col massimo della privacy. Il giorno e l’ora li decidi tu e, se necessario, potrai sempre modificare l’appuntamento o richiedere un altro professionista.
              </p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="assets/img/doc-tablet.png" class="img-fluid" alt="">
              </div>
          </div>
  
        </div>
      </section><!-- End Performances Section -->
       <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Le più cercate</h2>
          <p>Ecco una lista delle specializzazioni più ricercate tra i nostri utenti.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Cardiologia</h4>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Neurologia</h4>
                  
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Ortopedia</h4>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Pediatria</h4>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Cardiologia</h3>            
                <img src="assets/img/cardio.jpg" alt="" class="img-fluid">
                <p>Il cardiologo si occupa dello studio, della diagnosi e della cura delle malattie cardiovascolari acquisite o congenite.<br>
                Se pensi di avere bisogno di fare una visita al cuore, vorresti un secondo parere o desideri sottoporre l’esito di un esame ad uno specialista, puoi chiedere un consulto online e ottenere subito un parere medico.</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Neurologia</h3>
                
                <img src="assets/img/neuro.jpg" alt="" class="img-fluid">
                <p>Il neurologo si occupa della prevenzione, della diagnosi e del trattamento delle patologie che colpiscono il sistema nervoso.<br>
                Se hai bisogno di prenotare una visita specialistica neurologica, puoi chiedere un consulto neurologico online e ottenere subito un parere medico.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Ortopedia</h3>
                <img src="assets/img/ortopedia.jpg" alt="" class="img-fluid">
                <p>L’ortopedico traumatologo tratta le patologie di ossa, articolazioni e muscoli. <br>
                Se hai bisogno di esporre le tue problematiche a un ortopedico, desideri chiedere maggiori delucidazioni su una diagnosi puoi chiedere un consulto ortopedico online e ottenere subito un parere medico.</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Pediatria</h3>
                <img src="assets/img/pediatria.jpg" alt="" class="img-fluid">
                <p>Il Pediatra è il medico specializzato nella diagnosi, nella cura e nella prevenzione dei problemi che possono manifestarsi durante gli anni di crescita del bambino, dalla nascita all’adolescenza. <br>Svolge attività che spaziano dalla cura della salute infantile all’educazione sanitaria. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->   --}}

@endsection