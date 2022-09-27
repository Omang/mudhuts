
<section class="container my-5">
  <div class="row slider">
    <div class="col-lg-6 col-md-6 col-12">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>assets/img/great1.jpg" class="img-fluid w-100 h-25" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>assets/img/great1.jpg" class="img-fluid w-100 h-25" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>assets/img/great2.jpg" class="img-fluid w-100 h-25" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
    
     <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>assets/img/great1.jpg" class="img-fluid w-100 h-25" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>assets/img/great1.jpg" class="img-fluid w-100 h-25" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>assets/img/great2.jpg" class="img-fluid w-100 h-25" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
     
  </div>
</div>
</section>

<section class="featured container my-5">
  <div class="row">

    <?php foreach($foods as $food){?>
    <div class="one col-lg-4 col-md-6 col-12 mb-3">
      <img class="img-fluid" src="<?php echo base_url(); ?>dashboard/assets/fileupload/<?php echo $food['foodlink']; ?>">
      <div class="text w-75 h-50 text-light p-4">
        <h4><?php echo $food['subtitle'];?></h4>
        <a href="<?php echo site_url('culture/food/'.$food['foodid']); ?>">Read more</a>
      </div>
    </div>
    <?php }?>
    
  </div>
</section>

<section class="subscription container p-5">
  <div class="row justify-content-between align-items-center">
    <div class="content col-lg-6 col-md-6 col-12">
      <h3>Want to get weekly tips & tricks</h3>
      <p>Sign up and receive your first email  </p>
    </div>
    <div class="sub  col-lg-6 col-md-6 col-12">
       <!-- Button trigger modal -->
<button type="button" class="btn btn-success text-uppercase col-lg-5 col-md-12" data-toggle="modal"
 data-target="#staticBackdrop">
  Subscribe
</button><br><div id="backmsg" >
                
                
              </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Subscribe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contactForm" name="contact" role="form">
          <label class="text">Email</label>
          <input class="form-control" id="email" name="email" placeholder="Email-ID" 
          type="email"  />
        
      </div>
      <div class="modal-footer">
        <button type="button" id="closed" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input class="btn btn-default" id="submitx" name="submit" type="submit" value="Send Mail" />
        
                 <div id="mgs" ><p>wait..still..sending</p>
                 <div  class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%....................wait</div>
              </div>
            </div>

                
      </div>
     </form>
    </div>
  </div>
</div>

    </div>
  </div>
</section>

<section class="blog container my-5">
  <div class="row">
    <div class="post col-lg-8 col-md-8 col-12">
      <div class="row">

        <?php foreach($arts as $art){?>
        <div class="post1 col-lg-6 col-md-6 col-12 pb-4">
          <img class="img-fluid rounded pb-3 w-75 h-50" src="<?php echo base_url(); ?>dashboard/assets/fileupload/<?php echo $art['artlink']; ?>">
          <h3><?php echo $art['subtitle'];?></h3>
          <p class="fa fa-quote-left fa-pull-left pb-1"><?php echo word_limiter($art['artbody'], 15);?></p>
          <a href="<?php echo site_url('culture/art/'.$art['artid']); ?>">read more</a>
        </div>
        <?php }?>

        <?php foreach($foods as $food){?>
        <div class="post1 col-lg-6 col-md-6 col-12 pb-4">
          <img class="img-fluid rounded pb-3 w-75 h-50" src="<?php echo base_url(); ?>dashboard/assets/fileupload/<?php echo $food['foodlink']; ?>">
          <h3><?php echo $food['subtitle'];?></h3>
          <p class="fa fa-quote-left fa-pull-left pb-1"><?php echo word_limiter($food['foodbody'], 15);?></p>
          <a href="<?php echo site_url('culture/food/'.$food['foodid']); ?>">read more</a>
        </div>
        <?php }?>
        
        
      </div>
      <div class="row">
        <div class="fb-page w-100" data-href="https://www.facebook.com/Themudhuts-101499462565904/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Themudhuts-101499462565904/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Themudhuts-101499462565904/">Themudhuts</a></blockquote></div>
      </div>
    </div>
    <div class="sidebar col-lg-4 col-md-4 col-12">
      <div class="side1 text-center">
        <img class="img-fluid img-thumbnail mb-3 h-25" src="<?php echo base_url(); ?>assets/img/lion.jpg">
        <h3>African Zoo</h3>
        <h6>Meet mother lion</h6>
        <p >lion in the zoo lion in the zoo lion in the zoo lion in the zoo.</p>
      </div>
      <div class="side2">
        <h4>Helpful tips</h4>
        <hr class="w-50">

        <?php foreach($tips as $tip){?>
        <div class="row pb-3">
          <div class="sideimg col-lg-4 col-md-4 col-4">
            <img class="img-fluid" src="<?php echo base_url(); ?>dashboard/assets/fileupload/<?php echo $tip['tiplink']; ?>">
          </div>
          <div class="sidetext col-lg-8 col-md-8 col-8">
            <h4><?php echo $tip['subtitle'];?></h4>
            <p><?php echo  word_limiter($tip['tipbody'], 5); ?></p>
            <a href="<?php echo site_url('travels/tip/'.$tip['tipid']); ?>">read more</a>
          </div>
        </div>
        <?php }?>

      </div>
      <div class="side3">
        <h4>Amazon Books</h4>
        <hr class="w-25">
        <div class="one">
          <img class="img-fluid " src="<?php echo base_url(); ?>assets/img/giraffe.jpg">
          <div class="text text-center">
            <h4 class="text-light">World biggest animals</h4>
            <button class="text-uppercase">Visit now</button>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<section class="container my-5">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
           
    </div>
      
  </div>
</section>
