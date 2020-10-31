<section class="content">
<div class="row">
<?php 
foreach ($merchant as $m) {
  $count = $m['count'];
  if ($m['rate'] == NULL) {
    $rating = 0;
  }else{

  $rating = round($m['rate']/$count,1);
  }
?>
<div class="col-12">
<!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url('uploads/') ?><?php echo $m['photo'] ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $m['name'] ?> <span style="color:#777;"></span></h3>
                <p class="text-center">
                  <?php 
                  $r = $rating;
                      if ($r == 0) {
                         echo '<i class="fas fa-star text-dark"></i> (Tidak ada Review)'; 
                       }else{
                        
                          for ($i=0; $i < $r; $i++) {
                           echo '<i class="fas fa-star text-warning"></i>'; 
                          }
                       }
                   ?>
                </p>
                <p class="text-center"><?php echo $m['address'] ?></p><br>

                <div class="row">
                <div class="col-5">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Rating</b> <a class="float-right"><?php echo $rating; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Harga Terendah</b> <a class="float-right"><?php echo $m['min_price'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Harga Tertinggi</b> <a class="float-right"><?php echo $m['max_price'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Latitude</b> <a class="float-right"><?php echo $m['latitude'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Longitude</b> <a class="float-right"><?php echo $m['longitude'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Description</b> <br><a class="float-left"><?php echo $m['description'] ?></a>
                    </li>
                  </ul>
                </div>
                <div class="col-7" style="padding: 0 15px 0 50px;">
                  <b>Location</b>
                  <div id='map' style='width: 100%; height: 300px; '></div>
                </div>
                </div>
                <br>
                <a href="<?php echo base_url('') ?>merchants/edit/<?php echo $m['id'] ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<?php
}
?>
</div>
</section>
<script type="text/javascript">
  

    mapboxgl.accessToken = 'pk.eyJ1Ijoicml6a2loYXJkaW5hcyIsImEiOiJja2ZzMGt4MGMwOXg2MnJvMmU3M21vbjZmIn0.RWCidM5bmagDh2oyqh0_SQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
    center: [106.826220, -6.172099], // starting position [lng, lat]
    zoom: 10 // starting zoom
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
</script>