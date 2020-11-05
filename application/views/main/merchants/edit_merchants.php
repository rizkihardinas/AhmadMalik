
    <!-- Main content -->
    <section class="content">
      <?php echo form_open_multipart('Merchants/update/') ?>
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
                <input type="hidden" name="id" class="form-control" value="<?php echo $merchant['id'] ?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Harga Terendah</label>
                <input type="text" id="min_price" name="min_price" class="form-control" value="<?php echo $merchant['min_price'] ?>">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Harga Tertinggi</label>
                <input type="text" id="max_price" name="max_price" class="form-control" value="<?php echo $merchant['max_price'] ?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <textarea class="textarea" id="description" name="description" placeholder="Place some text here" 
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ><?php echo $merchant['description'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputAddress">Alamat</label>
                <textarea id="address" class="form-control" name="address" rows="4"> <?php echo $merchant['address'] ?></textarea>
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
                <label for="customFile">Photo Merchants</label>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                      <span class="text-sm mb-0" style="color:#888;">
                        Photo resolution 300x300 pixel
                      </span>
                    </div>
              </div>
              <div class="form-group">
                <label for="inputName">Latitude</label>
                <input type="text" id="latitude" name="latitude" class="form-control" value="<?php echo $merchant['latitude'] ?>">
              </div>
              <div class="form-group">
                <label for="inputName">Longitude</label>
                <input type="text" id="longitude"  name="longitude" class="form-control" value="<?php echo $merchant['longitude'] ?>">
              </div>
              <div class="form-group">
                <label for="inputEstimatedBudget">Merchants Location</label>
                  <div class="custom-file">
                    <div id='map' style='width: 485px; height: 300px;'></div>
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
    <!-- /.content -->
    <script>

    var latlong = [<?php echo $merchant['longitude'] ?>,<?php echo $merchant['latitude'] ?>];
    mapboxgl.accessToken = 'pk.eyJ1Ijoicml6a2loYXJkaW5hcyIsImEiOiJja2ZzMGt4MGMwOXg2MnJvMmU3M21vbjZmIn0.RWCidM5bmagDh2oyqh0_SQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
    center: latlong, // starting position [lng, lat]
    zoom: 10 // starting zoom
    });
    var marker = new mapboxgl.Marker()
    .setLngLat(latlong)
    .addTo(map);
    map.on('click', function(e) {
    // The event object (e) contains information like the
    // coordinates of the point on the map that was clicked.
    $('#latitude').val(e.lngLat.lat);
    $('#longitude').val(e.lngLat.lng);
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
    
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    </script>  
