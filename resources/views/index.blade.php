@extends('layouts.masterF')
@section('title','index')

@section('content')

    <style>
        .www {
            list-style: none;
        }
        .www li::before {
            content: "\2022";
            color:#ef6603;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
    </style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"> COVID-19</h2>
            <p class="animate__animated fanimate__adeInUp"> Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. </br> </br>
              Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness. </p>
          <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" target="blank" title="More Details" class="btn-get-started animate__animated animate__fadeInUp scrollto">Visit WHO website</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
            <iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" width="100%" height="600px"></iframe>
        </div>
      </div>
    </section><!-- End About Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 style="color: orange">Stay Safe</h3>
            <p> To prevent infection and to slow transmission of COVID-19, do the following:</p>
              <ul class="www">
                  <li class="text-light"> Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub. </li>
                  <li class="text-light"> Maintain at least 1 metre distance between you and people coughing or sneezing. </li>
                  <li class="text-light"> Avoid touching your face. </li>
                  <li class="text-light"> Cover your mouth and nose when coughing or sneezing. </li>
                  <li class="text-light"> Stay home if you feel unwell. </li>
                  <li class="text-light"> Refrain from smoking and other activities that weaken the lungs. </li>
                  <li class="text-light"> Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people. </li>
              </ul>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span> shibby997 </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>
@endsection
