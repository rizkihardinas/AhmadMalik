
    <!-- Main content -->
    <section class="content">
      <?php echo form_open('Merchants/insert/') ?>
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
                <input type="hidden" id="latitude" name="latitude" class="form-control">
                <input type="hidden" id="longitude" name="longitude" class="form-control">
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
                <label for="inputAddress">Alamat</label>
                <textarea id="address" class="form-control" name="address" rows="4"></textarea>
              </div>
              <div id='map' style='width: 400px; height: 300px;'></div>
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
                      <input type="file" class="custom-file-input" id="customFile" name="customFile">
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
    <?php echo form_close() ?>
    <!-- /.content -->
    <script>

    
    mapboxgl.accessToken = 'pk.eyJ1Ijoicml6a2loYXJkaW5hcyIsImEiOiJja2ZzMGt4MGMwOXg2MnJvMmU3M21vbjZmIn0.RWCidM5bmagDh2oyqh0_SQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
    center: [12.550343, 55.665957], // starting position [lng, lat]
    zoom: 9 // starting zoom
    });
    map.on('click', function(e) {
    // The event object (e) contains information like the
    // coordinates of the point on the map that was clicked.
    $('#latitude').val(e.lngLat);
    var marker1 = new mapboxgl.Marker();
    marker1.remove();

    var marker = new mapboxgl.Marker();
    
    marker.setLngLat(e.lngLat);
    marker.addTo(map);
  });
    $(document).on('click','#save',function(){
      var name = $('#name').val();
      var latitude = $('#latitude').val();
      var longitude = $('#longitude').val();
      var min_price = $('#min_price').val();
      var max_price = $('#max_price').val();
      var address = $('#address').val();
      var description = $('#description').val();

      var data = {
          name:name,
          latitude:latitude,
          longitude:longitude,
          min_price:min_price,
          max_price:max_price,
          address:address,
          description:description
      };
      $.ajax({
        url:'<?php echo   base_url('Merchants/insert') ?>',
        data:data,
        type:'POST',
        success:function(data){
          alert(data);
        }
      })
    });

    </script>  
