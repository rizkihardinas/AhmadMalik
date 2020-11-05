
    <!-- Main content -->
      <?php echo form_open_multipart('user/update/') ?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">User</h3>

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
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $users['name'] ?>">

                    <input type="hidden" name="id" class="form-control" value="<?php echo $users['id'] ?>">
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="inputClientCompany">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $users['phone'] ?>">
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="inputProjectLeader">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $users['email'] ?>">
                  </div>
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
          <input type="submit" value="Update" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <?php echo form_close() ?>