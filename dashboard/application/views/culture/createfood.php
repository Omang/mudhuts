 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Foods</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('culture/foods'); ?>">Foods</a></li>
          <li class="breadcrumb-item active">Creation section</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12">
      <div class="row">

    <div class="col-lg-4 col-md-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Food article</h5>

              <!-- Vertical Form -->
              <div>
              	<?php echo form_open_multipart('culture/addfood'); ?>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Picture</label>
                  <input type="file" class="form-control" id="profile" name="userimage" required >
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" id="inputEmail4" required >
                </div>
                

            </div>
          </div>
      </div>
    </div>
      <div class="col-lg-8 col-md-8">
        <div class="card">
            <div class="card-body">
        <div class="col-12">
                  <label for="inputAddress" class="form-label">Body</label>
                  <textarea class="tinymce-editor" id="tiny-editor" name="body" required >
                    
                  </textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-md btn-success">Post</button>
                  <button type="reset" class="btn btn-md btn-primary">Reset</button>
                </div>
              </div><!-- Vertical Form -->
              <?php echo form_close(); ?>

      </div>
    </div>
  </div>
</div>

</main>