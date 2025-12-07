
@include('inc/header')

 <!-- About Us Section -->
<section class="about-us-section">
  <div class="about-header text-center text-white py-4 px-3 mx-3">
    <h2 class="mb-0">ABOUT US</h2>
  </div>

  <div class="container py-5 mx-3 ">
    <h4 class="mb-3 mx-3 " style="color: #1D3F60">Who We Are?</h4>
    <p class="mx-3">
      LUCA World Records is a new-generation international record organization created to spotlight unique skills, remarkable performances, and inspiring individuals.
    </p>
    <p class="mx-3">
      Our goal is to give people a trusted, accessible, and respectful platform to showcase what makes them extraordinary.
    </p>
    <p class="mx-3">
        We value fair evaluation, digital transparency, and global reach—making LUCA the ideal record brand for individuals, schools, organizations, and communities.
    </p>
  </div>
</section>

<!-- CSS -->
<style>
.about-header {
  background-color: #d99c1d; /* golden color matching image */
}

.about-us-section h4 {
  font-weight: 600;
}

.about-us-section p {
  font-size: 1rem;
  line-height: 1.8;
  color: #333;
}


</style>

@include('inc/footer')
