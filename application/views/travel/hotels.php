
<section class="container my-5">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-12">
      
      <div class="row">
<?php foreach($hotels as $hotel){?>
  <div class="col-xl-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <img
              src="<?php echo base_url(); ?>dashboard/assets/fileupload/<?php echo $hotel['hotellink']; ?>"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
            />
            <div class="ms-3">
              <p class="fw-bold mb-1"><?php echo $hotel['subtitle'];?></p>
              <p class="text-muted mb-0"><?php echo word_limiter($hotel['hotelbody'], 8);?></p>
            </div>
          </div>
        </div>
      </div>
      <div
        class="card-footer border-0 bg-light p-2 d-flex justify-content-around"
      >
        <a
          class="btn btn-link m-0 text-reset"
          href="<?php echo site_url('travels/hotel/'.$hotel['hotelid']); ?>"
          role="button"
          data-ripple-color="primary"
          ><span class="badge rounded-pill badge-success">Read more</span></a>
       
      </div>
    </div>
  </div>
  <?php }?>
</div>

      </div>
    </div>
  </section>
