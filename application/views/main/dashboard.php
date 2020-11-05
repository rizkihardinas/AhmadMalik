<section class="content">
<!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jumlah_merchants; ?></h3>

                <p>Total Merchants</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-home"></i>
              </div>
              <a href="<?php echo base_url('') ?>merchants" class="small-box-footer">View more <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $jumlah_users; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-user"></i>
              </div>
              <a href="<?php echo base_url('') ?>user" class="small-box-footer">View more <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $jumlah_artikels; ?></h3>

                <p>Total Artikels</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-newspaper"></i>
              </div>
              <a href="<?php echo base_url('') ?>posts" class="small-box-footer">View more <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Rating Recent</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <?php 
                  foreach ($last_rating as $lr) {
                    
                    ?>


                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left"><?php echo $lr['user']; ?></span>
                      <span class="direct-chat-timestamp float-right"><?php echo $lr['dateCreated']; ?></span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="<?php echo base_url('assets/') ?>img/user<?php echo round($lr['rating']) ?>.png" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?php echo $lr['review']; ?><br>

                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">
                        <?php 
                          $r = $lr['rating'];
                          for ($i=0; $i < $r; $i++) { 
                           echo '<i class="fas fa-star text-warning"></i>'; 
                          }
                         ?>
                      </span>
                      <span class="direct-chat-timestamp float-right"><?php echo $lr['merchant']; ?></span>
                      </div>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>

                    <?php
                  }
                   ?>
                  <!-- /.direct-chat-msg -->



                </div>
                <!--/.direct-chat-messages-->
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
            </div>
            <!--/.direct-chat -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Top Merchants</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Merchants</th>
                    <th>Rating</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  foreach ($top_merchant as $tm) {
                    
                    ?>
                  <tr>
                    <td>
                      <img src="<?php echo base_url('uploads/') ?><?php echo $tm['photo']; ?>" class="img-circle img-size-32 mr-2">
                      <a style="color:#000;" href="<?php echo base_url('merchants/profile/') ?><?php echo $tm['idMerchant']; ?>"><?php echo $tm['name']; ?></a>
                    </td>
                    <td>
                      <?php 
                      $count = $tm['count'];
                      $rate = $tm['rate']/$count;
                        $r = $rate;
                        for ($i=0; $i < $r; $i++) { 
                         echo '<i class="fas fa-star text-warning"></i>'; 
                        }
                      ?>
                    </td>
                    <td>
                      <?php echo round($rate,1); ?>
                    </td>
                  </tr>

                    <?php
                  }
                   ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
</section>
