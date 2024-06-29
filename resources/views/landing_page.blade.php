<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acheron Laundry Express</title>
  <link rel="stylesheet" href="/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="shortcut icon" href="assets/images/acheron.png" type="image/x-icon">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-scroll">
  <header>
    <nav class="navbar fixed-top d-flex flex-wrap justify-content-center py-3 px-5">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="assets/images/acheron.png" alt="" width="45px" height="45px" class="me-3" />
      </a>
      <div id="navbar-scroll">
        <ul class="nav nav-pills px-3">
          <li class="nav-item">
            <a href="#Home" class="nav-link active" aria-current="page">Home</a>
          </li>
          <li class="nav-item"><a href="#About" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#Services" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="#Order" class="nav-link">Paket Laundry</a></li>
          <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  
  <section id="Home">
    <div class="jumbotron">
      <div class="wave2"></div>
      <div class="wave1"></div>
      <div class="content">
        <div class="desc">
          <img src="assets/images/acheron.png" alt="" width="200px" height="200px">
          <h1>ACHERON LAUNDRY EXPRESS</h1>
          <p style="margin-top: 30px;">Express Laundry Services and Premium Units</p>
          <p>On Time Guarantee and Free Pickup</p>
        </div>
      </div>
    </div>
  </section>

  <section id="About">
    <div class="container p-5">
      <div class="row flex-lg-row align-items-center mb-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="assets/images/about_icon.jpeg" class="about-image d-block img-fluid"/>
        </div>
        <div class="col-lg-6">
          <h1 class="about-us">
            ACHERON LAUNDRY EXPRESS
          </h1>
          <br>
          <p class="about-explanation">
            Archeron Express Laundry provides pick-up and drop-off services to
            ensure customer convenience in washing clothes. With the aim of
            providing convenience for busy customers, we are ready to pick up
            and deliver your clothes so you can focus on other more important
            things in your life.
          </p>
        </div>
      </div>
    </div>
    <div class="vektor2"></div>
  </section>

  <div class="vektor1"></div>

  
  <section id="Services">
    <div class="container py-5">
      <h1 class="service-title mb-3">Our Services</h1>
      <div class="row p-5 rounded-5" style="border: 4px solid #6AC6ED">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="p-3 d-flex flex-column justify-content-center align-items-center gap-4">
            <img src="assets/images/dryer.png" style="width: 50%;">
            <p>Wash thoroughly to remove all stains and dirt on your clothes</p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="p-3 d-flex flex-column justify-content-center align-items-center gap-4">
            <img src="assets/images/iron.png" style="width: 50%;">
            <p>Makes your clothes neat and fragrant and doesn't damage clothing fibers</p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="p-3 d-flex flex-column justify-content-center align-items-center gap-4">
            <img src="assets/images/coin.png" style="width: 50%;">
            <p>Save your monthly expenses!</p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="p-3 d-flex flex-column justify-content-center align-items-center gap-4">
            <img src="assets/images/van.png" style="width: 50%;">
            <p>Free pick-up and drop-off service up to a 3km radius</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Order">
    <div class="container77">
      <h1 class="title font-semi-bold">ORDER NOW</h1>
      <section class="menu">
        @foreach($content as $c)
        <div class="menu-item">
          <div class="border-logo">
            <img class="menu-logo" src="assets/images/{{ $c->icon }}" alt="Priority Laundry">
          </div>
          <h2 class="menu-title font-semi-bold">{{ $c->judul }}</h2>
          <ul class="menu-list font-semi-bold">
            <li>{{ $c->desc1 }}</li>
            <li>{{ $c->desc2 }}</li>
            <li>{{ $c->desc3 }}</li>
          </ul>
          <button class="order-button font-semi-bold">{{ $c->harga }}</button>
        </div>
        @endforeach
      </section>
    </div>
  </section>

  <section class="contact-section" id="Contact">
    <div class="contact-card">
        <div class="card">
            <div class="card-body">
                <div class="card-body-item left">
                    <img class="card-image" src="assets/images/laundry_machine.png" alt="">
                </div>
                <div class="card-vertical-line">
                    <div class="vl"></div>
                </div>
                <div class="card-body-item right">
                    <h3>CONTACT US</h3>
                    <div class="app-form">
                      <div class="app-form-group">
                        <label for="email">Email</label>
                        <p class="contant-text">aceronlaundry@gmail.com</p>
                      </div>
                      <div class="app-form-group">
                        <label for="phone">Phone</label>
                        <p class="contant-text">0812345678910</p>
                      </div>
                      <div class="app-form-group">
                          <label for="address">Address</label>
                          <p class="contant-text">Tiyosan, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                      </div>
                        <div class="app-form-group ">
                            <a href="https://maps.app.goo.gl/oCmXgagfYGyWThTw6" class="btn-kunjungi p-2 px-4">Kunjungi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="wave-bg">
    <img src="assets/images/footer_wave.png" alt="">
</div>
<div class="copyright">
    <p>Copyright @ 2024 Acheron Laundry Express</p>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>