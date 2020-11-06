<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mt-4">
                	<div class="col-sm-6">
                		Backup database terlebih dahulu sebelum menghapus data
                	</div>
                	<div class="col-sm-6">
      					<?php echo form_open_multipart('Admin/backup_db/') ?>
          				<input type="submit" value="Backup Database" class="btn btn-default float-right">
    					<?php echo form_close() ?>
                	</div>

                	<div class="col-sm-12">
                		<hr>
                	</div>
                  <div class="col-sm-4">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-info text-lg">
                          Merchants
                        </div>
                      </div>
                      Data Merchants <br />
                      <small>Seluruh data Merchants, backup dahulu sebelum membersihkan menghapus seluruh data</small>
                      	<br><br>
      					<?php echo form_open_multipart('Admin/clear_merchants/') ?>
          				<input type="submit" value="Delete Data Merchants" class="btn btn-sm btn-danger float-left">
    					<?php echo form_close() ?>


                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                          Artikel
                        </div>
                      </div>
                      Data Artikel <br />
                      <small>Seluruh data Artikel, backup dahulu sebelum membersihkan menghapus seluruh data</small>
                      	<br><br>
      					<?php echo form_open_multipart('Admin/clear_posts/') ?>
          				<input type="submit" value="Delete Data Artikel" class="btn btn-sm btn-danger float-left">
    					<?php echo form_close() ?>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-warning text-lg">
                          Users
                        </div>
                      </div>
                      Data Users <br />
                      <small>Seluruh data Users, backup dahulu sebelum membersihkan menghapus seluruh data</small>
                      	<br><br>
      					<?php echo form_open_multipart('Admin/clear_users/') ?>
          				<input type="submit" value="Delete Data Users" class="btn btn-sm btn-danger float-left">
    					<?php echo form_close() ?>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->