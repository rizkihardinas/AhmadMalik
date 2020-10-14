<section class="content">
<div class="row">

<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable Users</h3>
      
    <?php echo form_open_multipart('admin/add') ?>
      <input type="submit" value="Add New Admin" class="btn btn-success float-right">
    <?php echo form_close() ?>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="table_all_admin" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Nama</th>
          <th>Username</th>
          <th>Password</th>
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

</div>
</div>
</section>