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
            data : value,
            success: function(data, textStatus, jqXHR)
            {
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
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert(textStatus);
            }
        });
        });
</script>