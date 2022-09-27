  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tips</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Travel</li>
          <li class="breadcrumb-item active">Tips</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-2 col-md-2">
          <a href="<?php echo site_url('travel/createtip'); ?>" class="btn btn-outline-warning">create new</a><br><br></div>
       </div>
       <div class="row">
       

     <div class="col-lg-8">
          <div class="row">



<!-- News & Updates Traffic -->
          <div class="card">
            

            <div class="card-body pb-0">
              <h5 class="card-title">Helpful tips</h5>

              <div class="news">
                
                <?php foreach($tips as $tip){?>
                <div class="post-item clearfix">
                  <img src="<?php echo base_url(); ?>assets/fileupload/<?php echo $tip['tiplink']; ?>" alt="">
                  <h4><?php echo $tip['subtitle'];?></h4>
                  <p><a class="badge bg-warning" href="<?php echo site_url('travel/viewtip/'.$tip['tipid']); ?>">more</a></p>
                </div>
                <?php }?>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

    </div>
          </div>
             </div>
    </section>

  </main><!-- End #main -->
