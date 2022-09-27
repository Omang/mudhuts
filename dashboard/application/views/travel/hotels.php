  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hotels & Lodges</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Travel</li>
          <li class="breadcrumb-item active">Hotels & Lodges</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-2 col-md-2">
          <a href="<?php echo site_url('travel/createhotel'); ?>" class="btn btn-outline-warning">create new</a><br><br></div>
       </div>
       <div class="row">
       

     <div class="col-lg-8">
          <div class="row">



<!-- News & Updates Traffic -->
          <div class="card">
            

            <div class="card-body pb-0">
              <h5 class="card-title">Hotels & Lodges</h5>

              <div class="news">
                
                 <?php foreach($hotels as $hotel){?>
                <div class="post-item clearfix">
                  <img src="<?php echo base_url(); ?>assets/fileupload/<?php echo $hotel['hotellink']; ?>" alt="">
                  <h4><?php echo $hotel['subtitle'];?></h4>
                  <p><a class="badge bg-warning" href="<?php echo site_url('travel/viewhotel/'.$hotel['hotelid']); ?>">more</a></p>
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
