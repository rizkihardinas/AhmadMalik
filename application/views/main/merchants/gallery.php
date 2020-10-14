<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Gallery Photo of Merchants
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <?php 
                    foreach ($merchants as $merchants) {
                        echo '

                        <div class="col-sm-2">
                        '.anchor(base_url().'uploads/'.$merchants['photo'], '<img src="'.base_url().'uploads/'.$merchants['photo'].'" class="img-fluid mb-2" alt="white sample">', array('data-toggle' => 'lightbox','data-gallery' => 'gallery','data-title' => $merchants['name'])).'

                        </div>


                        ';
                    }
                ?>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->