 @include('inc/header')



 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators pb-1 pt-1 d-none d-lg-flex">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
  </div>

  <div class="carousel-inner  px-3">
    <div class="carousel-item active ">
      <img src="{{ asset('assets/banner3.jpg') }}" class="d-block w-100 carousel-img">
    </div>

    <div class="carousel-item">
      <img src="{{ asset('assets/banners-2.jpg') }}" class="d-block w-100 carousel-img">
    </div>

    <div class="carousel-item">
      <img src="{{ asset('assets/banners-3.jpg') }}" class="d-block w-100 carousel-img">
    </div>

    <div class="carousel-item">
      <img src="{{ asset('assets/banners-4.jpg') }}" class="d-block w-100 carousel-img">
    </div>
  </div>
</div>




<style>

/* Desktop */
.carousel-inner {
    height: 550px;
}

.carousel-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center; /* keep image centered */
}

/* Tablets */
@media (max-width: 992px) {
    .carousel-inner {
        height: 380px;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .carousel-inner {
        height: 250px;
    }
}


/* Default banner height - desktop */
.carousel-inner {
    height: 550px;
}

.carousel-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}



/* Reduce banner height on MD */
@media (max-width: 992px) {
    .carousel-inner {
        height: 380px !important;
    }
}

/* Reduce banner height on SM */
@media (max-width: 576px) {
    .carousel-inner {
        height: 250px !important;
    }
}

.carousel-indicators button {
    position: relative;
    width: 45px;
    height: 5px;
    background: #bfbfbf;
    border: none;
    border-radius: 10px;
    overflow: hidden;
    margin: 0 5px;
}

.carousel-indicators button .progress {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0%;
    background: rgba(0, 135, 255, 0.8);
    border-radius: 10px;
    transition: width 0.1s linear;
}

/* Active button progress animation */
.carousel-indicators button.active .progress {
    animation: progressBar 4s linear forwards; /* 4s = carousel interval */
}

@keyframes progressBar {
    0% { width: 0%; }
    100% { width: 100%; }
}




/* Set a proper fixed height for carousel and make images cover */
.carousel-inner {
    height: 600px; /* adjust to your preferred height */
}

.carousel-img {
    height: 100%;
    width: 100%;
    object-fit: cover; /* maintains aspect ratio and fills container */
}

/* Optional: make indicators prettier */
.carousel-indicators button {
    width: 45px;
    height: 5px;
    background: #bfbfbf;
    border: none;
    border-radius: 10px;
    opacity: 0.6;
    transition: all .3s ease-in-out;
}

.carousel-indicators button.active {
    width: 30px;
    height: 20px;
    border-radius: 50%;
    background: radial-gradient(

          circle,
        rgba(0,135,255,1) 0%,       /* bright core */
        rgba(0,135,255,0.4) 40%,    /* fading edge */
        rgba(0,135,255,0.1) 70%,    /* almost transparent */
        transparent 100%

    );
    opacity: 1;
    position: relative;
    animation: pulseGlow 1.5s infinite ease-in-out;
}

.carousel-indicators button.active::after {
    content: "";
    position: absolute;
    width: 70%;
    height: 6px;
    background: #0a233d;
    border-radius: 10px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}


 @keyframes glowPulse {
    0% { transform: scale(1); box-shadow: 0 0 8px rgba(109, 166, 216, 0.7), 0 0 20px rgba(0,135,255,0.3); }
    50% { transform: scale(1.3); box-shadow: 0 0 15px rgb(184, 160, 54), 0 0 25px rgba(0,135,255,0.5); }
    100% { transform: scale(1); box-shadow: 0 0 8px rgba(0,135,255,0.7), 0 0 20px rgba(0,135,255,0.3); }
}
.carousel-inner {
    height: 500px; /* smaller height */
}

.carousel-img {
    height: 300%;
    width: 100%;
    object-fit: cover; /* fills container nicely without stretching */
}

</style>



<style>
    .mission-vision-section {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 50px;

    flex-wrap: wrap;
    background-color: #fff;
  }

  .mission, .vision {
    flex: 1 1 300px;
    max-width: 500px;
    text-align: center;
    position: relative;
    padding: 20px;
  }

  .divider {
    width: 2px;
    background-color: #d4af37; /* Gold color */
    margin: 0 20px;
  }

  .mission i, .vision i {
    font-size: 40px;
    color: #d4af37; /* Gold color */
    margin-bottom: 15px;
  }

  .mission h2, .vision h2 {
    color: #d4af37;
    font-size: 24px;
    margin-bottom: 15px;
  }

  .mission p, .vision p {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
  }

  @media (max-width: 768px) {
    .mission-vision-section {
      flex-direction: column;
      align-items: center;
    }
    .divider {
      display: none;
    }
  }









  /* Reduce banner height on MD + SM */
@media (max-width: 991px) {
  .carousel-inner {
      height: 350px !important;
  }
  .carousel-img {
      height: 100% !important;
      object-fit: cover;
  }
}

/* Smaller phones */
@media (max-width: 576px) {
  .carousel-inner {
      height: 260px !important;
  }
}

/* Bring cards closer to banner on SM & MD */
@media (max-width: 991px) {
  .cards-row {
      margin-top: -40px !important;  /* pull cards upward */
  }
}

/* Extra tight spacing on mobile */
@media (max-width: 576px) {
  .cards-row {
      margin-top: -60px !important;
  }
}

</style>






<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center text-center g-4 cards-row">

      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-custom">
        <div class="card feature-card h-100 p-4">
          <div class="corner top-left"></div>
          <div class="corner top-right"></div>
          <div class="corner bottom-left"></div>
          <div class="corner bottom-right"></div>
          <h5 class="card-title fw-bold mt-3">Transparent verification</h5>
          <p class="card-text text-muted">Clear, secure adjudication process.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-custom">
        <div class="card feature-card h-100 p-4">
          <div class="corner top-left"></div>
          <div class="corner top-right"></div>
          <div class="corner bottom-left"></div>
          <div class="corner bottom-right"></div>
          <h5 class="card-title fw-bold mt-3">Certified adjudicators</h5>
          <p class="card-text text-muted">Verified experts and official certification.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-custom">
        <div class="card feature-card h-100 p-4">
          <div class="corner top-left"></div>
          <div class="corner top-right"></div>
          <div class="corner bottom-left"></div>
          <div class="corner bottom-right"></div>
          <h5 class="card-title fw-bold mt-3">Global recognition</h5>
          <p class="card-text text-muted">Records and recognition across countries.</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-custom">
        <div class="card feature-card h-100 p-4">
          <div class="corner top-left"></div>
          <div class="corner top-right"></div>
          <div class="corner bottom-left"></div>
          <div class="corner bottom-right"></div>
          <h5 class="card-title fw-bold mt-3">Fast process</h5>
          <p class="card-text text-muted">Streamlined submission and faster review times.</p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-custom">
        <div class="card feature-card h-100 p-4">
          <div class="corner top-left"></div>
          <div class="corner top-right"></div>
          <div class="corner bottom-left"></div>
          <div class="corner bottom-right"></div>
          <h5 class="card-title fw-bold mt-3">Support & care</h5>
          <p class="card-text text-muted">Help and guidance through the process.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<style>
    /* Custom LG column for 5 cards in one row */
@media (min-width: 992px) {
  .col-lg-custom {
    flex: 0 0 20%;
    max-width: 20%;
  }
}

/* CARD STYLE */
.feature-card {
  position: relative;
  border-radius: 18px;
  background: #fff;
  min-height: 240px;
  padding: 35px 20px !important;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  overflow: hidden;
  transition: 0.35s ease;
  cursor: pointer;
  text-align: center;
}

/* Corner lines */
.corner {
  position: absolute;
  width: 30px;
  height: 30px;
  border: 2px solid #C9A534;
  transition: 0.4s ease;
}

.top-left { top: 15px; left: 15px; border-right: none; border-bottom: none; }
.top-right { top: 15px; right: 15px; border-left: none; border-bottom: none; }
.bottom-left { bottom: 15px; left: 15px; border-right: none; border-top: none; }
.bottom-right { bottom: 15px; right: 15px; border-left: none; border-top: none; }

/* Hover animation for corners */
.feature-card:hover .corner {
  width: 100%;
  height: 100%;
  transition: all 0.5s ease;
  opacity: 0.15;
}

/* Hover card transform */
.feature-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 45px rgba(29,63,96,0.25);
}

/* Card title */
.card-title {
  transition: color 0.3s ease;
  color: #0a233d;
}

.feature-card:hover .card-title {
  color: #C9A534;
  letter-spacing: 1px;
}

/* Card text */
.card-text {
  padding: 0 10px;
  font-size: 15px;
  line-height: 1.5;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .feature-card {
    min-height: 220px;
    padding: 28px 18px !important;
  }
}

@media (max-width: 576px) {
  .feature-card {
    min-height: 200px;
    padding: 25px 15px !important;
  }
}

</style>








 <section class="about-section mx-3 py-5">
  <div class="container py-4">
    <div class="row align-items-center g-4">

      <!-- LEFT TEXT -->
      <div class="col-12 col-md-6 text-white">
        <h2 class="fw-bold mb-4 about-title">
          LUCA WORLD RECORDS – <br>
          THE BEST PLATFORM TO <br>
          SHOWCASE YOUR TALENT
        </h2>

        <p class="about-text">
          Welcome to LUCA World Records<br>
          A global platform that celebrates extraordinary talents, unbelievable achievements,
          and inspiring stories from every corner of the world.
          Whether you want to set a new record, break an existing one, or showcase your group’s
          power, LUCA is here to honour your excellence with transparency, credibility,
          and global recognition.
        </p>

        <p class="about-text mt-3">
          Its primary purpose is to record, honor, appreciate, recognize, and
          adjudicate world-class events and activities.
        </p>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-12 col-md-6 text-center text-md-end">
        <img
          src="{{ asset('assets/images.jfif') }}"
          class="img-fluid rounded shadow about-img"
          alt="Einstein World Records"
        />
      </div>

    </div>
  </div>
</section>


<style>
    .about-section {
  background: #1D3F60;
  padding: 60px 0;
}

.about-title {
  font-size: 34px;
  line-height: 1.3;
}

.about-text {
  font-size: 16px;
  line-height: 1.7;
  color: #fff;
}

.about-img {
  width: 100%;
  max-width: 520px; /* perfect size like sample */
}

/* SM & MD responsive fix */
@media (max-width: 768px) {
  .about-title {
    font-size: 26px;
    text-align: center;
  }

  .about-text {
    text-align: center;
  }

  .about-img {
    margin-top: 15px;
    width: 100%;
  }

  .about-section {
    padding: 40px 15px;
  }
}

</style>







 <div class="mission-vision-section py-5 mx-3">
  <div class="mission animate">
    <i class="fas fa-bullseye icon"></i>
    <h2>MISSION</h2>
    <p>
      To properly document extraordinary achievements globally..<br>
      "We aim to break boundaries, entertain, and inform the world by crowning a new generation of achievers and sharing their stories."
    </p>
  </div>

  <!-- Center animation line -->
  <div class="divider animate-line"></div>

  <div class="vision animate delay-1">
    <i class="fas fa-eye icon"></i>
    <h2>VISION</h2>
    <p>
      To bring out and recognize hidden talents, human excellence, and the collective efforts of organizations globally.
    </p>
  </div>
</div>


<style>
    /* Divider line */
.divider {
  width: 3px;
  height: 180px;
  background: linear-gradient(to bottom, #d4af37 0%, #d4af37 100%);
  position: relative;
  overflow: hidden;
}

/* Invisible at start */
.animate-line {
  opacity: 0;
}

/* Golden line grow animation */
.animate-line.visible {
  opacity: 1;
}

.animate-line::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 0%;
  background: #d4af37;
  animation: lineGrow 1.2s ease-out forwards;
}

/* Keyframes: Top to bottom fill */
@keyframes lineGrow {
  0% { height: 0%; }
  100% { height: 100%; }
}

</style>



<script>
    const animatedElements = document.querySelectorAll('.animate, .animate-line');

function handleScroll() {
  const triggerBottom = window.innerHeight * 0.85;

  animatedElements.forEach(el => {
    const elementTop = el.getBoundingClientRect().top;

    if (elementTop < triggerBottom) {
      el.classList.add('visible');
    }
  });
}

window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);

</script>


@include('inc/footer')

