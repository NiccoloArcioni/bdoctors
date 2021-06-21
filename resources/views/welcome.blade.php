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
    <!-- ======= About Us Section ======= -->
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
              <div style="width:100%" class="icon-box" data-aos="fade-up" data-aos-delay="200">
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
                  <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-up">
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
                  <div class="col-lg-6" data-aos="fade-up">
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
    </section><!-- End Departments Section -->
     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">85</span>
              <p>Dottori</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">18</span>
              <p>Dipartimenti</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up">8</span>
              <p>Esami di laboratorio</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">150</span>
              <p>Recensioni</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">Come lascio una recensione? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Se desideri aggiungere una recensione su un dottore, usa il tasto Aggiungi recensione, che si trova su tutti i profili. Scegli il numero di stelle, scrivi la recensione e fai click sul tasto Aggiungi recensione. La tua recensione non verrà mostrata subito sul sito ma verrà prima inviata al moderatore e mostrata dopo averla approvata.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Perché accade che recensioni accettate vengano poi eliminate? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Accanto a ogni recensione c'è un pulsante "Riporta abuso". Può essere usato da qualunque utente, anche da un medico, che ritiene che una recensione espressa sia incorretta o contraria ai Termini e alle Condizioni. Questo report viene inviato al moderatore, che contatta l'autore della recensione richiedendo una descrizione dettagliata della situazione in questione, così come anche le informazioni in merito all'ora e al luogo della visita. L'autore della recensione ha sette giorni per inviarci le sue spiegazioni. 
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Posso modificare una mia recensione già pubblicata sul profilo di uno specialista? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Clicca su Modifica per cambiare la tua recensione. Se non visualizzi i due pulsanti, per favore scrivici all'indirizzo contatto@bdoctors.it riportando il problema riscontrato.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Come funziona la consulenza online? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Le consulenze online ti permettono di ottenere aiuto senza muoverti da casa. Potrai risolvere i tuoi dubbi grazie al parere di uno specialista.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Posso inviare un messaggio solo al dottore che mi interessa? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Certamente. Esiste una sezione apposita per l'invio dei messaggi privati tra te e il tuo medico di fiducia.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Come posso pagare la mia visita? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Si può pagare direttamente dalla piattaforma.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->

@endsection