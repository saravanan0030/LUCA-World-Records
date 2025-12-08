

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<footer class="ewr-footer mx-3 ">
  <div class="container footer-top  ">

    <!-- Logo + About -->
    <div class="footer-col">
<img src="{{ asset('assets/footerlogo.png') }}" class="logo-img w-50   " alt="Luco World Records logo">

      <p class="footer-about  ">
         Luca World Records is an organization to identify and promote
        the individual by their own special interests and talents.
      </p>

      <div class="footer-social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Contact -->
    <div class="footer-col">
      <h3>CONTACT</h3>

      <p><i class="fab fa-whatsapp"></i> +918056658840   </p>
      <p><i class="far fa-envelope"></i> info@lucarecords.com  </p>

    </div>

    <!-- Links -->
    <div class="footer-col">
      <h3>USEFUL LINKS</h3>
      <a href="#">Apply Now</a>
      <a href="#">Home</a>
      <a href="#">About Us</a>
    </div>

    <!-- Address -->
    <div class="footer-col">
      <h3>GET IN TOUCH</h3>
      <p><i class="fas fa-map-marker-alt"></i>
        P.O. Box 34722,<br>
           India (Global Verification Available),<br>
         chennai floor,<br>
        Al  Road,  <br>
        United Arab Emirates
      </p>
    </div>

  </div>

  <!-- Bottom Bar -->
  <div class="footer-bottom ">
<p>© 2025 Luca World Records. All rights reserved.</p>
  </div>
</footer>




<style>


    /* Footer Background */
.ewr-footer {
  background:  linear-gradient(180deg, #000000, #0d0d0d, #000000);
  padding-top: 50px;
  color: #e6e6e6;
  font-family: Arial, sans-serif;
}

/* GRID */
.footer-top {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 40px;
  padding: 0 20px 40px;
}

/* Logo */
.footer-logo {
  width: 130px;
  margin-bottom: 20px;
}

/* About text */
.footer-about {
  line-height: 1.6;
  margin-bottom: 20px;
}

/* Headings */
.footer-col h3 {
  color: #F4C04A;
  margin-bottom: 15px;
  font-size: 18px;
  font-weight: bold;
  position: relative;
}

.footer-col h3::after {
  content: "";
  width: 40px;
  height: 2px;
 background: #F4C04A;

  display: block;
  margin-top: 6px;
}

/* Icons + Text Rows */
.footer-col p,
.footer-col a {
  display: block;
  color: #cfcfcf;
  margin-bottom: 10px;
  font-size: 15px;
  text-decoration: none;
}

.footer-col a:hover {
  color: #F4C04A;
}

/* Social Icons */
.footer-social a {
  color: white;
  border: 1px solid #aaa;
  width: 38px;
  height: 38px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-right: 10px;
  border-radius: 50%;
  transition: 0.3s;
}

.footer-social a:hover {
  background: #1D3F60;
  color:   #F4C04A;
  border-color: #F4C04A;
}

/* Bottom Bar */
.footer-bottom {
  background: #D3A03F;
  color: black;
  text-align: center;
  padding: 12px 0;
  font-weight: 600;
  margin-top: 20px;
}






</style>

