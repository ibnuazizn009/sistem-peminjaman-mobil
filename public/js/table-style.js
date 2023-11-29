$(document).ready(function () {
    $('#dtBasicExample').DataTable({
      order: [[0, 'asc']]
    });
    $('.dataTables_length').addClass('bs-select');
  });