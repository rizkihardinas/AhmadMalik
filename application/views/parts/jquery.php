<script type="text/javascript">
    $(document).ready(function(){
        $('#table_all_merchant').DataTable({
            "pageLength" : 10,
            lengthChange: false,
            autoWidth: false,
            dom: 'Bfrtip',
            buttons: [
                { extend:'excel', attr: { id: 'allan' } }, 'pdf', 'print'
            ],
            "ajax": {
                url:'<?php echo base_url() ?>merchants/dt_merchants',
                "type": "POST"
            },
        });
        $('#table_all_user').DataTable({
            "pageLength" : 10,
            lengthChange: false,
            autoWidth: false,
            dom: 'Bfrtip',
            buttons: [
                { extend:'excel', attr: { id: 'allan' } }, 'pdf', 'print'
            ],
            "ajax": {
                url:'<?php echo base_url() ?>user/dt_user',
                "type": "POST"
            },
        });
        $('#table_all_admin').DataTable({
            "pageLength" : 10,
            lengthChange: false,
            autoWidth: false,
            dom: 'Bfrtip',
            buttons: [
                { extend:'excel', attr: { id: 'allan' } }, 'pdf', 'print'
            ],
            "ajax": {
                url:'<?php echo base_url() ?>admin/dt_admin',
                "type": "POST"
            },
        });
        $('#table_all_rating').DataTable({
            "pageLength" : 10,
            lengthChange: false,
            autoWidth: false,
            dom: 'Bfrtip',
            buttons: [
                { extend:'excel', attr: { id: 'allan' } }, 'pdf', 'print'
            ],
            "ajax": {
                url:'<?php echo base_url() ?>merchants/dt_rating',
                "type": "POST"
            },
        });
    });

    $(document).on( "click","#btnHapusMerchants", function() {
        var id = $(this).attr("data-id");
        var value = {
            id: id
          };
         $.ajax(
          {
            url:'<?php echo base_url() ?>merchants/delete_merchants',
            type: "POST",
            data : {id:id},
            success: function(data, textStatus, jqXHR)
            {
                alert(data);  
                $('#table_all_merchant').DataTable().ajax.reload(); 
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert(textStatus);
            }
        });
    });
    $(document).on( "click","#btnHapusAdmin", function() {
        var id = $(this).attr("data-id");
        var value = {
            id: id
          };
         $.ajax(
          {
            url:'<?php echo base_url() ?>admin/delete_admin',
            type: "POST",
            data : {id:id},
            success: function(data, textStatus, jqXHR)
            {
                alert(data);  
                $('#table_all_admin').DataTable().ajax.reload(); 
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert(textStatus);
            }
        });
    });
    $(document).on( "click","#btnHapusUser", function() {
        var id = $(this).attr("data-id");
        var value = {
            id: id
          };
         $.ajax(
          {
            url:'<?php echo base_url() ?>user/delete_user',
            type: "POST",
            data : {id:id},
            success: function(data, textStatus, jqXHR)
            {
                alert(data);  
                $('#table_all_user').DataTable().ajax.reload(); 
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert(textStatus);
            }
        });
    });
</script>