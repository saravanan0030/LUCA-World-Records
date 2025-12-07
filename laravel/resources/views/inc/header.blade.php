<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Luca World Records</title>
  <link rel="icon"  href="{{ asset('assets/logo.png') }}"  width="150px" height="100px"  type="img/png">

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Include Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
    /* FIX: dropdown hover */
    .navbar .dropdown:hover .dropdown-menu {
        display: block;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* FIX: logo responsiveness — slightly bigger on desktop, smaller on phones */
    .logo-img {
        height: 96px; /* slightly bigger */
        max-height: 96px;
        padding-right: -70px;
        transition: transform 0.3s ease;
    }



    /* FIX: menu spacing (prevents breaking on zoom out) */
    .navbar-nav .nav-link {
        padding: 0.7rem 1rem;
        font-weight: 500;
        white-space: nowrap;
        transition: all 0.3s ease;
        position: relative;
        color: #4a3a24;

    }

    .navbar-nav .nav-link:hover {
        transform: translateY(-3px);
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 50%;
        width: 0;
        height: 2px;
        background: #C9A534;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .navbar-nav .nav-link:hover::after {
        width: 80%;
    }

    /* FIX: Apply Button */
    .apply-btn {
        background: #1D3F60;
        color: #fff !important;
        padding: 8px 20px;
        border-radius: 5px;
        font-weight: 600;
        white-space: nowrap;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .apply-btn:hover {
        background: #C9A534;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(201, 165, 52, 0.3);
    }

    /* FIX: dropdown list width */
    .dropdown-menu {
        min-width: 200px;
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item {
        transition: all 0.2s ease;
        border-left: 3px solid transparent;
    }

    .dropdown-item:hover {
        padding-left: 1.5rem;
        border-left-color: #C9A534;
        transform: translateX(5px);
    }

    /* Remove Bootstrap blue highlight on click */
    .dropdown-item:active {
        background-color: transparent;
        color: inherit;
    }

    .dropdown-item.active {
        background-color: transparent;
        color: inherit;
    }

    .dropdown-item:focus {
        background-color: transparent;
        color: inherit;
        outline: none;
    }

    /* Menu toggler animation */
    .navbar-toggler {
        transition: all 0.3s ease;
        border: 2px solid #1D3F60;
    }

    .navbar-toggler:hover {
        transform: rotate(10deg);
    }

    .navbar-toggler:not(.collapsed) {
        transform: rotate(90deg);
    }

    /* Better look for small screens */
    @media (max-width: 991px) {
        .navbar-nav .nav-link {
            padding-left: 0.5rem;
        }
        .apply-btn {
            display: inline-block;
            margin-top: 10px;
        }
        .navbar-nav .nav-link::after {
            display: none;
        }
    }



        .dropdown-item:hover {
        padding-left: 1.5rem;
        border-left-color: #C9A534;
        transform: translateX(5px);
    }

    /* Remove Bootstrap blue highlight on click */
    .dropdown-item:active {
        background-color: transparent;
        color: inherit;
    }

    .dropdown-item.active {
        background-color: transparent;
        color: inherit;
    }

    .dropdown-item:focus {
        background-color: transparent;
        color: inherit;
        outline: none;
    }

    /* Menu toggler animation */




    /* stycky nave */



    /* --- Sticky Navbar --- */
.sticky-nav {
    position: sticky;
    top: 0;
    z-index: 999;
    transition: all 0.3s ease;
}

/* Shadow when scrolling */
.sticky-nav.scrolled {
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
    background: #ffffff !important;
    transform: translateY(0);
}

/* Desktop logo */
.logo-img {
    width: 250px;
    height: auto;
}

/* Mobile smaller logo */
@media (max-width: 576px) {
    .logo-img {
        width: 170px;
    }
}
.apply-btn {
    background: #1D3F60;
    color: #fff !important;
}

.navbar .apply-btn {
    background-color: #1D3F60 !important;
    color: #fff !important;
    border-radius: 5px;
    padding: 8px 20px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.navbar .apply-btn:hover {
    background-color: #C9A534 !important;
    color: #000 !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(201, 165, 52, 0.3);
}


</style>
</head>
<body>
 <!-- NAVBAR START -->
<nav class="navbar navbar-expand-lg bg-white px-3 mx-3 sticky-nav">
  <div class="container-fluid px-lg-4">
    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('assets/logo.png') }}" class="logo-img mb-3" alt="Luca World Records logo">
      <div class="ms-2 d-none d-md-block">
        <h6 class="fw-bold mb-0">Luca World Records<sup>®</sup></h6>
        <small style="font-size: 12px; color: #4a3a24;">Your Achievement, Celebrate Together</small>
      </div>
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler model-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="bar bar1"></span>
      <span class="bar bar2"></span>
      <span class="bar bar3"></span>
    </button>

    <!-- MENU ITEMS -->
    <div class="collapse navbar-collapse justify-content-end" id="menu">
      <ul class="navbar-nav align-items-lg-center mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('ouradjudicators') }}">Our Adjudicators</a></li>
        <li class="nav-item dropdown">
          <a href="{{ route('records') }}" class="nav-link dropdown-toggle">Records</a>
          <ul class="dropdown-menu">
             <li>
    <a class="dropdown-item" href="{{ route('Individual') }}">
        Individual
    </a>
</li>

             <li>
    <a class="dropdown-item" href="{{ route('massparticipation') }}">
        Mass Participation
    </a>
</li>

                        <li>
    <a class="dropdown-item" href="{{ route('recognition') }}"> Recognition
     </a>
</li>
          </ul>
        </li>
      <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}"
       href="{{ route('gallery') }}">
       Gallery
    </a>
</li>

        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        <li class="nav-item ms-lg-2">
          <a href="/applynow" class="apply-btn nav-link">APPLY NOW</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- NAVBAR END -->

<!-- CUSTOM STYLES -->
<style>
/* Model-style Toggler */
.model-toggler {
  width: 35px;
  height: 30px;
  position: relative;
  border: none;
  background: none;
  cursor: pointer;
  z-index: 1050;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 0;
}

.model-toggler .bar {
  width: 100%;
  height: 4px;
  background: #4a3a24;
  border-radius: 4px;
  transition: all 0.5s ease;
  transform-origin: center;
  border: none;
}

/* Animate to "X" with smooth morphing */
.model-toggler.active .bar1 {
  transform: rotate(45deg) translate(5px, 5px);
  background: #ff5722;
}

.model-toggler.active .bar2 {
  opacity: 0;
  transform: scaleX(0);
}

.model-toggler.active .bar3 {
  transform: rotate(-45deg) translate(6px, -6px);
  background: #ff5722;
}

/* Hover effect */
.model-toggler:hover .bar1,
.model-toggler:hover .bar3 {
  background: #ff9800;
  transition: all 0.3s ease;
}

.model-toggler:hover .bar2 {
  background: #ff9800;
}
</style>

<!-- SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const toggler = document.querySelector('.model-toggler');
  toggler.addEventListener('click', function() {
    toggler.classList.toggle('active');
  });
});
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<script>
document.addEventListener("scroll", function () {
    const navbar = document.querySelector(".sticky-nav");

    if (window.scrollY > 20) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});








</script>

</body>
</html>
