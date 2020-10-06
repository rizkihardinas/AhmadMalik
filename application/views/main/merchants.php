
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Merchants</label>
                <input type="text" id="name" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Harga Terendah</label>
                <input type="text" id="min_price" name="min_price" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Harga Tertinggi</label>
                <input type="text" id="max_price" name="max_price" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <textarea id="description" class="form-control" name="description" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Latitude</label>
                <input type="text" id="latitude" name="latitude" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Longitude</label>
                <input type="text" id="longitude" name="longitude" class="form-control">
              </div>  
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Media</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Foto Merchants</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
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
          <input type="submit" value="Create new Merchants" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
