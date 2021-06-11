@extends('layouts.test_layout')

@section('content')
    @include('partials.jumbotron')
    
     {{-- Inizio main --}}
     <main id="main">
        <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>su di noi</h2>
            <p>BDoctors nasce per mettere a disposizione uno strumento in grado di aiutare l’utente nella ricerca del miglior medico o dentista nella propria città, facilitando il contatto tra paziente e dottore, e semplificando il processo di prenotazione.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
              <img src="assets/img/doc-about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
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

      
     </main>
     

@endsection