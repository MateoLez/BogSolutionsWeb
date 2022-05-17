<x-app-layout>

                <!--Hey! This is the original version
of Simple CSS Waves-->
<!-- Animacion Header -->
<section id="intro">
<div class="header">
<!--Content before waves-->
<div class="inner-header flex">
</svg>
<div class="headline">
<h1>SOLUCIONES TECNOLÓGICAS <br> A LA MEDIDA</h1> 
</div>
</div>
<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->
</div>
<!--Header ends-->
</section>

<!-- Titulo Servicios -->
<section id="servicios">

<div class="titulo">
<div class="glitch" data-text="Servicios">Servicios</div>
</div>


<!--Cartas-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<div class="hero-section">
  <div class="card-grid">
    <div class="card">
      <div class="card__background" style="background-image: url(/img/bogservice1.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </div>
    <div class="card">
      <div class="card__background" style="background-image: url(/img/bogservice2.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </li>
    </div>
    <div class="card">
      <div class="card__background" style="background-image: url(/img/bogservice3.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
      </div>
  <div>
</div>
</section>

<!-- Section Clientes-->
<section id="Clientes">
<!-- <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="/img/bg.mp4" type="video/mp4" /></video> -->
<div class="bg-img2">
<img class="bg-img" src="/img/bogsclientes.jpg" alt="">
<!-- Titulo Clientes-->
  <div class="masthead">
    <div class="masthead-content text-white">
      <div class="container-fluid px-4 px-lg-0">
        <h1 class="fst-italic lh-1 mb-4">Nuestros CLIENTES</h1>

<!-- Carrusel Clientes -->
        <div class="client-slider">
          <div class="client-slide-track">
            <!-- Mega Estopas -->
            <div class="client-slide">
              <img src="/img/BogsME.png" height="100" alt="" />
            </div>
            <!-- Como en Kasa -->
            <div class="client-slide">
              <img src="/img/BogsCEK.png" height="100" alt="" />
            </div>
            <!-- Mega Estopas -->
            <div class="client-slide">
              <img src="/img/BogsME.png" height="100" alt="" />
            </div>
            <!-- Como en Kasa -->
            <div class="client-slide">
              <img src="/img/BogsCEK.png" height="100" alt="" />
            </div>
            <!-- Mega Estopas -->
            <div class="client-slide">
              <img src="/img/BogsME.png" height="100" alt="" />
            </div>
            <!-- Como en Kasa -->
            <div class="client-slide">
              <img src="/img/BogsCEK.png" height="100" alt="" />
            </div>
            <!-- Mega Estopas -->
            <div class="client-slide">
              <img src="/img/BogsME.png" height="100" alt="" />
            </div>
            <!-- Como en Kasa -->
            <div class="client-slide">
              <img src="/img/BogsCEK.png" height="100" alt="" />
            </div>
            <!-- Mega Estopas -->
            <div class="client-slide">
              <img src="/img/BogsME.png" height="100" alt="" />
            </div>
            <!-- Como en Kasa -->
            <div class="client-slide">
              <img src="/img/BogsCEK.png" height="100" alt="" />
            </div>
            <!-- Mega Estopas -->
            <div class="client-slide">
              <img src="/img/BogsME.png" height="100" alt="" />
            </div>
            <!-- Como en Kasa -->
            <div class="client-slide">
              <img src="/img/BogsCEK.png" height="100" alt="" />
            </div>
            <!-- Mega Estopas -->
            <div class="client-slide">
              <img src="/img/BogsME.png" height="100" alt="" />
            </div>
            <!-- Como en Kasa -->
            <div class="client-slide">
              <img src="/img/BogsCEK.png" height="100" alt="" />
            </div>
            <!-- Mega Estopas -->
            <div class="client-slide">
              <img src="/img/BogsME.png" height="100" alt="" />
            </div>
          </div>
        </div>
<!-- Final Carrusel -->
      </div>
    </div>
  </div>
</div>

</section>
<!--Content ends-->



            </div>
        </div>
    </div>

    <script>
    ScrollReveal({
    // delay: 400,
    duration   : 1800,
    distance   : '90px',
    easing     : 'ease-out',
    origin     : 'left',
    reset      : true,
    scale      : 1,
    viewFactor : 0,
    }).reveal('.hero-section' );

    ScrollReveal({
    duration   : 600,
    distance   : '80px',
    easing     : 'ease-out',
    origin     : 'bottom',
    reset      : true,
    scale      : 1,
    viewFactor : 0,
    }).reveal('.headline' );

    ScrollReveal({
    delay: 400,
    duration   : 1800,
    distance   : '90px',
    easing     : 'ease-out',
    origin     : 'right',
    reset      : true,
    scale      : 1,
    viewFactor : 0,
    }).reveal('.titulo' );

    ScrollReveal({
    duration   : 600,
    distance   : '80px',
    easing     : 'ease-out',
    origin     : 'bottom',
    reset      : true,
    scale      : 1,
    viewFactor : 0,
    }).reveal('.masthead-content' );

</script>

</x-app-layout>


