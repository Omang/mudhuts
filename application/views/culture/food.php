 
<section class="container my-5">
  <div class="row">


      <div class="col-xl-6 mb-4">
    <div class="card">
      <div class="card-header">
        <img
              src="<?php echo base_url(); ?>dashboard/assets/fileupload/<?php echo $foodlink; ?>"
              alt=""
              style="width: 80px; height: 80px"
              class="img-thumbnail"
            />
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            
            <div class="ms-3">
              <p class="fw-bold mb-1"><?php echo $subtitle;?></p>
              <p class="text-muted mb-2"><?php echo $foodbody;?></p>
            </div>
          </div>
        </div>
      </div>
      <div
        class="card-footer border-0 bg-light p-2 d-flex justify-content-around"
      >
        <a
          class="btn btn-link m-0 text-reset"
          href="<?php echo site_url('culture/foods'); ?>"
          role="button"
          data-ripple-color="primary"
          ><span class="badge rounded-pill badge-success">more posts</span></a>
       
      </div>
    </div>
  </div>
 
    </div>
  </section>





