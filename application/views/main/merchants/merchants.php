<div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable Merchants</h3>
              <?php echo $this->session->flashdata('msg') ?>
               <?php echo form_open_multipart('merchants/add') ?>
                <input type="submit" value="Add New Merchant" class="btn btn-success float-right">
              <?php echo form_close() ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table_all_merchant" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Photo</th>
                  <th>Nama</th>
                  <th>Min Price</th>
                  <th>Max Price</th>
                  <th>Description</th>
                  <th>Latitude - Longitude</th>
                  <th>Data Create</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->