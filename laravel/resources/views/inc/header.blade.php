<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Responsive Menu</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
        width: auto;
        transition: transform 0.3s ease;
    }



    /* FIX: menu spacing (prevents breaking on zoom out) */
    .navbar-nav .nav-link {
        padding: 0.7rem 1rem;
        font-weight: 500;
        white-space: nowrap;
        transition: all 0.3s ease;
        position: relative;
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

</style>
</head>
<body>

<!-- NAVBAR START -->
 <nav class="navbar navbar-expand-lg bg-white px-3 mx-3 sticky-nav">

    <div class="container-fluid px-lg-4">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('assets/logo.png') }}" class="logo-img mb-3" alt="Luco World Records logo">
            <div class="ms-2 d-none d-md-block">
                <h6 class="fw-bold mb-0">Luca World Records<sup>®</sup></h6>
                <small style="font-size: 12px;">Your Achievement, Celebrate Together</small>
            </div>
        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler collapsed" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu"
                aria-controls="menu"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU ITEMS -->
        <div class="collapse navbar-collapse justify-content-end" id="menu">
            <ul class="navbar-nav align-items-lg-center mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>

                <!-- RECORDS DROPDOWN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/records" data-bs-toggle="dropdown">
                        Records
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Individual</a></li>
                        <li><a class="dropdown-item" href="#">Mass Participation</a></li>
                        <li><a class="dropdown-item" href="#">Recognition</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Exemplary Awards</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">News & Media</a>
                </li>

                <!-- APPLY NOW BUTTON -->
                <li class="nav-item ms-lg-2">
                    <a href="#" class="apply-btn nav-link">APPLY NOW</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- NAVBAR END -->

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
