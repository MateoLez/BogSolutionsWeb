<x-app-layout>

                <!--Hey! This is the original version
of Simple CSS Waves-->
<!-- Animacion Header -->
<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
</svg>

<div class="headline">
<h1>SOLUCIONES TECNOLOGICAS <br> A LA MEDIDA</h1> 
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

<!-- Titulo -->


<div class="titulo">
<div class="glitch" data-text="Servicios">Servicios</div>
</div>


<!--Cartas-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section">
  <div class="card-grid">
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(/img/bogservice1.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(/img/bogservice2.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </li>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(/img/bogservice3.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
  <div>
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

</script>

</x-app-layout>


