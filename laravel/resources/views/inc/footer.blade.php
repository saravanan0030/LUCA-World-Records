
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome for social icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-…" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="styles.css" />
  <title>Your Site</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


<body>
  <!-- rest of site content -->

  <footer class="site-footer px-3 mx-3">
    <div class="footer-wrapper">
      <!-- Left: Logo -->
      <div class="footer-logo">
        <a href="/">
          <img  src="{{asset('assets/logo.png') }}" alt="Site Logo" width="200px" height="100px" class="h-100 : w-100"/>
        </a>
      </div>

      <!-- Center: Contact / Info -->
      <div class="footer-info">
        <h3>Contact</h3>
        <p>📍 Location: India (Global Verification Available)</p>
        <p>📧 Email: <a href="mailto:info@lucarecords.com">info@lucarecords.com</a></p>
        <p>📞 Phone: +91  </p>
        <p>🌐 Website: <a href="https://www.lucarecords.com" target="_blank" rel="noopener">www.lucarecords.com</a></p>
        <p>📱 Social Media: @lucarecords (Instagram / LinkedIn / YouTube)</p>
      </div>

      <!-- Right: Social Icons -->
      <div class="footer-social">
        <a href="https://www.instagram.com/lucarecords" aria-label="Instagram" target="_blank" rel="noopener">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/lucarecords" aria-label="LinkedIn" target="_blank" rel="noopener">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://www.youtube.com/@lucarecords" aria-label="YouTube" target="_blank" rel="noopener">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2025 Luca World Records. All rights reserved.</p>
    </div>
  </footer>

<style>
    /* Reset some basics */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;

  font-family: "Poppins", sans-serif;



}

/* Footer overall style */
.site-footer {
  background-color: #111;
  color: #ddd;
  font-family: Arial, sans-serif;
}

.footer-wrapper {
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 40px 20px;
}

/* Logo */
.footer-logo img {
  max-width: 260px;
  height: auto;
}

/* Info section */
.footer-info {
  flex: 1 1 300px;
  margin: 10px 20px;
}

.footer-info h3 {
  font-size: 1.5rem;
  margin-bottom: 15px;
  color: #fff;
}

.footer-info p {
  font-size: 1rem;
  margin: 6px 0;
}

.footer-info a {
  color: #4aa3ff;
  text-decoration: none;
}

.footer-info a:hover {
  text-decoration: underline;
}

/* Social icons */
.footer-social {
  display: flex;
  flex: 0 1 200px;
  margin: 10px 20px;
  gap: 15px;
}

.footer-social a {
  color: #ddd;
  font-size: 1.4rem;
  transition: color 0.3s, transform 0.3s;
}

.footer-social a:hover {
  color:  #1D3F60;
  transform: scale(1.2);
}

/* Footer bottom (copyright) */
.footer-bottom {
  border-top: 1px solid #333;
  padding: 15px 10px;
  text-align: center;
  font-size: 0.9rem;
  color: #888;
}

/* Responsive: on narrow screens, stack vertically */
@media (max-width: 768px) {
  .footer-wrapper {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  .footer-info, .footer-social {
    margin: 15px 0;
  }
  .footer-social {
    justify-content: center;
  }
}

</style>
