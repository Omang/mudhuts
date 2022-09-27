 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Arts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('culture/arts'); ?>">Arts</a></li>
          <li class="breadcrumb-item active">Art View</li>
        </ol>
      </nav>
    </div>

    <div class="row">
       
     <div class="col-lg-8 col-md-8 col-12">
          <div class="row">

             
           <h5 class="card-title"><?php echo $subtitle; ?></h5>
            <div class="card-body  pt-4 d-flex flex-column align-items-center">
            	<div class="row col-lg-2 col-md-2 col-4">
             <img src="<?php echo base_url(); ?>assets/fileupload/<?php echo $artlink; ?>" alt="Tender View"
              class=" img-fluid rounded-circle"></div>
            
                  <p><?php echo $artbody; ?></p>

                  <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
                 </div>
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-12">
                 <a href="<?php echo site_url('culture/editart/'.$artid); ?>" class="btn btn-success">Update article</a>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                <a href="<?php echo site_url('culture/deleteart/'.$artid); ?>" class="btn btn-danger">Delete article</a>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                 <a href="<?php echo site_url('culture/arts'); ?>" class="btn btn-warning pt-2">Go back</a>
               </div>
             </div>


          </div>
      </div>
  </div>


</main>