/*=========================================================================================
    File Name: datatable-advanced.js
    Description: Advanced Datatable
    ----------------------------------------------------------------------------------------
    Item Name: Apex - Responsive Admin Theme
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function () {

  // dom jQuery events
  var jqueryEventsTable = $('.dom-jQuery-events').DataTable();

  $('.dom-jQuery-events tbody').on('click', 'tr', function () {
    var data = jqueryEventsTable.row(this).data();
    alert('You clicked on ' + data[0] + '\'s row');
  });


  //  column rendering
  $('.column-rendering').DataTable({
    "columnDefs": [{
      // The 'data' parameter refers to the data for the cell (defined by the 'data' option, which defaults to the column being worked with, in this case 'data: 0').
      "render": function (data, type, row) {
        return data + ' (' + row[3] + ')';
      },
      "targets": 0
    }, {
      "visible": false,
      "targets": [3]
    }]
  });

  // multiple table control elements
  $('.multiple-control-elements').DataTable({
    "dom": "<'row'<'col-md-6 col-12'l><'col-md-6 col-12'p>>rt<'row'<'col-md-6 col-12'l><'col-md-6 col-12'p>><'clear'>"
  });


  // Language file
  $('.language-file').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
    }
  });


  // Order by the grouping
  var groupingTable = $('.row-grouping').DataTable({
    "columnDefs": [{
      "visible": false,
      "targets": 2
    }],
    "order": [
      [2, 'asc']
    ],
    "displayLength": 25,
    "drawCallback": function (settings) {
      var api = this.api();
      var rows = api.rows({
        page: 'current'
      }).nodes();
      var last = null;

      api.column(2, {
        page: 'current'
      }).data().each(function (group, i) {
        if (last !== group) {
          $(rows).eq(i).before(
            '<tr class="group"><td colspan="5">' + group + '</td></tr>'
          );

          last = group;
        }
      });
    }
  });
  $('.row-grouping tbody').on('click', 'tr.group', function () {
    var currentOrder = table.order()[0];
    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
      table.order([2, 'desc']).draw();
    } else {
      table.order([2, 'asc']).draw();
    }
  });


  // File export
  $('.file-export').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });
  $('.dt-buttons').addClass('btn-group');
  $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mb-2');

});
