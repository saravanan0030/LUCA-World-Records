@include('inc/header')



<!-- Title Section -->
<section class="page-header-section mx-3">
 <div class=" .page-header-section  .page-title  text-center text-white py-4 px-3 mx-3">
    <h2 class="mb-0">   GALLERY</h2>
  </div>
</section>

<!-- No Records Box -->
<div class="no-records-wrapper my-5">
  <div class="no-records-box">
    No Records Found.
  </div>
</div>


<style>

.page-header-section {
  background: #D2951A;

}



.no-records-wrapper {
  display: flex;
  justify-content: center;
}

.no-records-box {
  background: #E3A024;
  padding: 18px 30px;
  color: #fff;
  font-weight: 600;
  border-radius: 4px;
  font-size: 16px;
  text-align: center;
}


@media (max-width: 576px) {
  .page-title {
    font-size: 24px;
  }
  .no-records-box {
    width: 90%;
    padding: 15px;
  }
}

</style>



@include('inc/footer')
