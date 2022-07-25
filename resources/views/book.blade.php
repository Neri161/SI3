@extends('master')


@section('content')
    <!-- about section -->    
  <div class="hero_area">
    <div class="bg-box">
      <img src="../../../../Downloads/feane/feane/images/hero-bg.jpg" alt="">
    </div>

  </div>

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Suscribete
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form method="POST" action="{{ url('/suscribirse') }}">
            @csrf
              <div>
                <input type="text" class="form-control" name="user_name" placeholder="Nombre" required/>
              </div>
              <div>
                <input type="text" class="form-control" name="user_last" placeholder="Apellido Paterno" required/>
              </div>
              <div>
                <input type="email" class="form-control" name="user_email" placeholder="Email" required/>
              </div>
              <div class="btn_box">
                <button>
                  Suscribirse
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
 
  <!-- footer section -->

  <!-- jQery -->
  <script src="../../../../Downloads/feane/feane/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="../../../../Downloads/feane/feane/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="../../../../Downloads/feane/feane/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../../../Downloads/feane/feane/css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="../../../../Downloads/feane/feane/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../../../../Downloads/feane/feane/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../../../Downloads/feane/feane/css/responsive.css" rel="stylesheet" />

    <!-- end about section -->
@endsection()


