    $(document).ready(function() {
    var dt = $('#example').DataTable({
             dom: 'Bfrtip',
              buttons: [
                    // 'selectAll',
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ],
        columnDefs: [ {
        orderable: false,
        className: 'select-checkbox',
        targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
        });

    $(".selectAll").on( "click", function(e) {
    if ($(this).is( ":checked" )) {
        dt.rows(  ).select();        
    } else {
        dt.rows(  ).deselect(); 
    }
});
} );