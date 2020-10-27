<section class="content">
<div class="row">

<div class="col-12">
<!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url('assets/') ?>img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $this->session->userdata("name"); ?> <span style="color:#777;">(<?php echo $this->session->userdata("username"); ?>)</span></h3>

                <p class="text-muted text-center">Admin</p>

                <!-- <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                </ul> -->

                <a href="<?php echo base_url('') ?>admin/edit/<?php echo $this->session->userdata("id"); ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>
</section>