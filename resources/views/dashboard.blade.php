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
</section>

<!-- Titulo Servicios -->
<section id="servicios">

<div class="titulo">
<div class="glitch" data-text="Servicios">Servicios</div>
</div>


<!--Cartas-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section">
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
</section>
</section>

<!-- Background Video-->
<section>
<!-- <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="/img/bg.mp4" type="video/mp4" /></video> -->
<img src="/img/bogsolutionsworld.jpg" alt="">
        <!-- Masthead-->
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">Our Website is Coming Soon</h1>
                    <p class="mb-5">We're working hard to finish the development of this site. Sign up below to receive updates and to be notified when we launch!</p>

                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="email" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                            <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>

                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                    </form>
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

</script>

</x-app-layout>


