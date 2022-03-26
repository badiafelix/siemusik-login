// Call the dataTables jQuery plugin
$(document).ready(function() {

  //$('#dataTable').DataTable();

  var table = $('#dataTable').DataTable( {
    lengthChange: false,
    buttons: [
      { extend: 'pdf', text: 'Download Pdf' },
      { extend: 'excel', text: 'Download Excel' }
    ]
  } );

  table.buttons().container()
      .appendTo( '#dataTable_wrapper .col-md-6:eq(0)' );

  
});
