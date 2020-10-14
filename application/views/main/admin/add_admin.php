
    <!-- Main content -->
    <section class="content">
      <?php echo form_open_multipart('admin/insert/') ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label for="inputName">Nama</label>
                    <input type="text" id="name" name="name" class="form-control">
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="inputClientCompany">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="inputProjectLeader">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                  </div>
                </div>
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Admin" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <?php echo form_close() ?>
    <!-- /.content -->
