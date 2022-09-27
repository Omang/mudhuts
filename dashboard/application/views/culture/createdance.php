 <main id="main" class="main">

    <div class="pagetitle">
      <h1>dances</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('culture/dances'); ?>">Dances</a></li>
          <li class="breadcrumb-item active">Creation section</li>
        </ol>
      </nav>
    </div>

    <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create a Traditional Dance article</h5>

              <!-- Vertical Form -->
              <div class="row g-3">
              	<?php echo form_open_multipart('culture/adddance'); ?>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Picture</label>
                  <input type="file" class="form-control" id="profile" name="userimage" required >
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" id="inputEmail4" required >
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Body</label>
                  <textarea id="tiny-editor" class="form-control" name="body" required >
                  	
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


</main>