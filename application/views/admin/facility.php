
<?php include('admin_layouts/header.php') ?>

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Text Editors</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Text Editors</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">Summernote</h3>
              </div>

              <div class="card-body">
                <textarea id="summernote">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                  </textarea>
              </div>
              <!-- <div class="card-footer">
                Visit
                <a href="https://github.com/summernote/summernote/">Summernote</a>
                documentation for more examples and information about the
                plugin.
              </div> -->
            </div>
          </div>
        </div>
      </section>
    </div>

<?php include('admin_layouts/footer.php') ?>