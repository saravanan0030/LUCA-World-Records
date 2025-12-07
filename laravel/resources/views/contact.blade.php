 @include('inc/header')

<section class="contact-section container ">
  <h2 class="mx-3 mb-5" style="color: #1D3F60; font-weight: bold; ">Help Us Grow With Your Feedback & Suggestions</h2>

  <div class="row contact-row align-items-center justify-content-between" style="gap:30px;">

    <!-- LEFT COLUMN -->
    <div class="col-12 col-lg-4 text-lg-start mb-4 mb-lg-0 mx-3">
      <div id="contactInfo">
        <p><strong>Contact Sports</strong></p>
        <p>Cell: <a href="tel:+918056658840">+918056658840</a></p>
        <p>Email Us: <a href="mailto:info@lucarecords.com">info@lucarecords.com</a></p>

        <!-- Show Form Button -->
        <button id="toggleForm" class="contact-btn">Drop Us a Line!</button>
      </div>

      <!-- CONTACT FORM -->
      <div class="contact-form" id="contactForm">
        <form id="whatsappForm">

          <input type="text" id="name" name="name" placeholder="Name*" required>
          <input type="text" id="phone" name="phone" placeholder="Phone*" required>
          <input type="email" id="email" name="email" placeholder="Email*" required>
          <textarea id="message" name="message" placeholder="Message" rows="5"></textarea>

          <!-- BUTTONS -->
          <div style="display:flex; gap:10px; justify-content:flex-start;">
            <button type="submit" class="send-btn">Send</button>
            <button type="button" id="cancelBtn" class="cancel-btn">Cancel</button>
          </div>

        </form>
      </div>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="col-12 col-md-12 col-lg-4 text-lg-end mx-1">
      <div class="contact-image">
        <img src="{{ asset('assets/contact.png') }}"
             alt="Basketball Team"
             class="img-fluid d-block mx-lg-0"
             style="max-width: 100%; height: auto;">
      </div>
    </div>

  </div>
</section>

<script>
// Toggle Form
const toggleBtn = document.getElementById('toggleForm');
const contactForm = document.getElementById('contactForm');
const cancelBtn = document.getElementById('cancelBtn');
const contactInfo = document.getElementById('contactInfo');

toggleBtn.addEventListener('click', () => {
  contactForm.classList.add('show');
  contactInfo.style.display = 'none';
  contactForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
});

// Cancel Button – hide form + reset fields
cancelBtn.addEventListener('click', () => {
  document.getElementById("whatsappForm").reset();
  contactForm.classList.remove('show');
  contactInfo.style.display = 'block';
});

// WhatsApp Submit
document.getElementById("whatsappForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    let whatsappNumber = "8667622002";

    let whatsappMessage =
      `New Contact Form Message:%0A%0A` +
      `Name: ${name}%0A` +
      `Phone: ${phone}%0A` +
      `Email: ${email}%0A` +
      `Message: ${message}`;

    let url = `https://wa.me/91${whatsappNumber}?text=${whatsappMessage}`;

    window.open(url, "_blank");
});
</script>

<style>
  .contact-section {
    padding: 10px ;
    text-align: center;
  }

  .contact-btn {
    background-color: #ff8000;
    color: #fff;
    font-weight: bold;
    border: none;
    padding: 10px 25px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    margin-top: 15px;
  }

  .contact-btn:hover {
    background-color: #1D3F60;
  }

  .contact-form {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    max-width: 450px;
    display: none;
    opacity: 0;
    transform: translateX(-100%);
    transition: 0.5s ease;
    margin-top: 20px;
  }

  .contact-form.show {
    display: block;
    opacity: 1;
    transform: translateX(0);
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    margin-bottom: 15px;
    padding: 10px 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  /* Buttons */
  .send-btn {
    background: #1D3F60;
    color: #fff;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
  }
  .send-btn:hover {
    background: #16314a;
  }

  .cancel-btn {
    background: #ff9800;
    color: #fff;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
  }
  .cancel-btn:hover {
    background: #777;
  }

  .contact-image img {
    width: 90%;
    border-radius: 10px;
  }

  @media (max-width: 767px) {
    .row.contact-row {
      flex-direction: column-reverse;
      align-items: center;
    }
  }
</style>

@include('inc/footer')
