 @include('inc/header')





<!-- Title Section -->
<section class="page-header-section mx-3">
 <div class=" .page-header-section  .page-title  text-center text-white py-4 px-3 mx-3">
    <h2 class="mb-0"> OUR ADJUDICATORS</h2>
  </div>
</section>

<style>

.page-header-section {
  background: #D2951A;

}



</style>




<section class="py-5 bg-light">
  <div class="container ">

     <p style="color: #555; font-style: italic; margin-bottom: 40px;  font-weight: 700; " class="text-center mb-5 text-muted mx-3">       A few talented and certified adjudicators who help us maintain fairness and accuracy.</p>

    <div class="row g-4 justify-content-center mx-3">

      <!-- Card -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="judge-card">
          <h4>Bharath Kumar</h4>
          <p class="role">Editor In Chief</p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="judge-card">
          <h4>Sundar Rubesh</h4>
          <p class="role">International Co-ordinator</p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="judge-card">
          <h4>Deepalatha</h4>
          <p class="role">State In-charge – Andhra Pradesh</p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="judge-card">
          <h4>Gaja Munishwar</h4>
          <p class="role">Adjudicator</p>
        </div>
      </div>

      <!-- Card -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="judge-card">
          <h4>Manimaran M</h4>
          <p class="role">Adjudicator</p>
        </div>
      </div>

    </div>
  </div>
</section>


<style>
    .judge-card {
  background: #fff;
  border-radius: 20px;
  padding: 25px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  text-align: center;
  transition: 0.4s ease;
  border: 2px solid transparent;
  animation: fadeUp 1s ease forwards;
  opacity: 0;
}

.judge-card:hover {
  transform: translateY(-8px) scale(1.03);
  border-color:  #1D3F60 ;
  box-shadow: 0 8px 25px rgba(0,135,255,0.2);
}

.judge-card h4 {
  font-weight: 700;
  margin-bottom: 8px;
}

.judge-card .role {
  font-size: 15px;
  color: #007bff;
  font-weight: 600;
  background: linear-gradient(to right, #1D3F60, #C9A534);
  -webkit-background-clip: text;
  color: transparent;
  animation: shimmer 2s infinite linear;
}

/* Fade Animation */
@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Shimmer animation */
@keyframes shimmer {
  0% { filter: brightness(1); }
  50% { filter: brightness(1.8); }
  100% { filter: brightness(1); }
}

</style>



@include('inc/footer')
