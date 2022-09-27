 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Food</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('culture/foods'); ?>">foods</a></li>
          <li class="breadcrumb-item active">Update section</li>
        </ol>
      </nav>
    </div>

    <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update food article</h5>

              <!-- Vertical Form -->
              <div class="row g-3">
                <?php echo form_open_multipart('culture/updatefood'); ?>
                <div class="col-12">
                  <input type="hidden" name="foodid" value="<?php echo $foodid; ?>">
                  <label for="inputNanme4" class="form-label">Change Picture</label>
                  <input type="file" class="form-control" id="profile" name="userimage"  >
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                      <p>Current Picture</p>
                      <img class="img-fluid" src="<?php echo base_url(); ?>assets/fileupload/<?php echo $foodlink; ?>">
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Change Title</label>
                  <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="<?php echo $subtitle; ?>" >
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Change Body</label>
                  <textarea id="tiny-editor" class="form-control" name="body"  >
                    <?php echo $foodbody; ?>
                  </textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-md btn-success">Update</button>
                  <button type="reset" class="btn btn-md btn-primary">Reset</button>
                </div>
              </div><!-- Vertical Form -->
              <?php echo form_close(); ?>

            </div>
          </div>
          <div class="row">
            <div class="text-center">
              <a class="btn btn-warning" href="<?php echo site_url('culture/foods'); ?>">Go back</a>
            </div>
          </div>
      </div>


</main>