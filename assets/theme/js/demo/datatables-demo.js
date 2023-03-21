// Call the dataTables jQuery plugin
$(document).ready(function() {

  $('#dataTable').DataTable( {
    dom: "Blfrtip",
    buttons: [
        'csv', 'excel', 'pdf', 'print'
    ],
    "lengthChange": true,
    "language": {
      "lengthMenu": "Afiseaza _MENU_ randuri",
      "zeroRecords": "Nu s-au gasit rezultate",
      "info": "Se afiseaza pagina _PAGE_ din _PAGES_",
      "infoEmpty": "No records available",
      "infoFiltered": "(filtered from _MAX_ total records)",
      "search" : "Cauta:",
      "paginate": {
        "first":      "Primul",
        "last":       "Ultimul",
        "next":       "Urmatorul",
        "previous":   "Precedentul"
    }
  }
} );
});

$(document).ready(function() {
  $('#dataTableActivity').DataTable();
});