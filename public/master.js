'use strict';
(function ($) {
  $(document).on('ready', function () {
    $('.table__card table').DataTable({})
    $('.table__card .dataTables_filter input').attr('placeholder', 'Search')

    $('.date').pikaday({ firstDay: 1 });
  });
}(jQuery));
