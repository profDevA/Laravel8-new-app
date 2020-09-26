/*=========================================================================================
    File Name: datatable-api.js
    Description: API Datatable
    ----------------------------------------------------------------------------------------
    Item Name: Apex - Responsive Admin Theme
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function () {

  //-------------------Add Row-----------------------
  var t = $(".add-rows").DataTable();
  var counter = 1;
  $("#addRow").on("click", function () {
    t.row
      .add([
        counter + ".1",
        counter + ".2",
        counter + ".3",
        counter + ".4",
        counter + ".5"
      ])
      .draw(false);

    counter++;
  });
  // Automatically add a first row of data
  $("#addRow").trigger("click");


  //-------------------Individual column searching (text/select inputs)------------------------
  var tableSearching = $(".text-select-inputs-searching").DataTable({
    // Add a select input to 1st, 3rd and 5th footer cell
    initComplete: function () {
      this.api().columns([1, 3, 5]).every(function () {
        var column = this;
        var select = $('<select><option value="">Select All</option></select>')
          .appendTo($(column.footer()).empty())
          .on("change", function () {
            var val = $.fn.dataTable.util.escapeRegex($(this).val());
            column.search(val ? "^" + val + "$" : "", true, false).draw();
          });
        column.data().unique().sort().each(function (d, j) {
          select.append('<option value="' + d + '">' + d + "</option>");
        });
      });
    }
  });
  // Add a text input to 0th, 2nd and 4th footer cell
  $(".text-select-inputs-searching tfoot th").each(function (index) {
    var searchable_col = [0, 2, 4]
    if (!(searchable_col.indexOf(index) > -1)) {
      return
    }
    var title = $(this).text();
    $(this).html('<input type="text" placeholder="Search ' + title + '">');
  });
  // Apply the search
  tableSearching.columns([0, 2, 4]).every(function () {
    var that = this;
    $('input', this.footer()).on('keyup change clear', function () {
      if (that.search() !== this.value) {
        that
          .search(this.value)
          .draw();
      }
    });
  });


  //-------------------Child rows (show extra / detailed information)------------------------
  // Formatting function for row details - modify as you need
  function format(d) {
    // `d` is the original data object for the row
    return (
      '<table>' +
      "<tr>" +
      "<td>Full name:</td>" +
      "<td>" +
      d.name +
      "</td>" +
      "</tr>" +
      "<tr>" +
      "<td>Extension number:</td>" +
      "<td>" +
      d.extn +
      "</td>" +
      "</tr>" +
      "<tr>" +
      "<td>Extra info:</td>" +
      "<td>And any further details here (images etc)...</td>" +
      "</tr>" +
      "</table>"
    );
  }
  // Child rows (show extra / detailed information)
  var tableChildRows = $(".show-child-rows").DataTable({
    ajax: "../app-assets/data/datatables/ajax-child-rows.json",
    columns: [{
        className: "details-control",
        orderable: false,
        data: null,
        defaultContent: ""
      },
      {
        data: "name"
      },
      {
        data: "position"
      },
      {
        data: "office"
      },
      {
        data: "salary"
      }
    ],
    order: [
      [1, "asc"]
    ]
  });
  // Add event listener for opening and closing details
  $(".show-child-rows tbody").on("click", "td.details-control", function () {
    var tr = $(this).closest("tr");
    var row = tableChildRows.row(tr);
    if (row.child.isShown()) {
      // This row is already open - close it
      row.child.hide();
      tr.removeClass("shown");
    } else {
      // Open this row
      row.child(format(row.data())).show();
      tr.addClass("shown");
    }
  });


  // Row selection (multiple rows)
  var multipleRowsTable = $(".selection-multiple-rows").DataTable();

  $(".selection-multiple-rows tbody").on("click", "tr", function () {
    $(this).toggleClass("selected");
  });

  $("#row-count").on("click", function () {
    alert(
      multipleRowsTable.rows(".selected").data().length + " row(s) selected"
    );
  });


  // Row selection and deletion (single row)
  var tableselectionDelete = $(".selection-deletion-row").DataTable();
  $(".selection-deletion-row tbody").on("click", "tr", function () {
    if ($(this).hasClass("selected")) {
      $(this).removeClass("selected");
    } else {
      tableselectionDelete.$("tr.selected").removeClass("selected");
      $(this).addClass("selected");
    }
  });
  $("#delete-row").on("click", function () {
    tableselectionDelete
      .row(".selected")
      .remove()
      .draw(false);
  });

  // Show / hide columns dynamically
  var tableDynamically = $(".hide-columns-dynamically").DataTable({
    scrollY: "200px",
    paging: false
  });
  $("a.toggle-vis").on("click", function (e) {
    e.preventDefault();
    // Get the column API object
    var column = tableDynamically.column($(this).attr("data-column"));
    // Toggle the visibility
    column.visible(!column.visible());
  });


  // Search API (regular expressions)
  function filterGlobal() {
    $('.search-api').DataTable().search(
      $('#global_filter').val(),
      $('#global_regex').prop('checked'),
      $('#global_smart').prop('checked')
    ).draw();
  }

  function filterColumn(i) {
    $('.search-api').DataTable().column(i).search(
      $('#col' + i + '_filter').val(),
      $('#col' + i + '_regex').prop('checked'),
      $('#col' + i + '_smart').prop('checked')
    ).draw();
  }
  $(document).ready(function () {
    $('.search-api').DataTable();
    $('input.global_filter').on('keyup click', function () {
      filterGlobal();
    });
    $('input.column_filter').on('keyup click', function () {
      filterColumn($(this).parents('tr').attr('data-column'));
    });
  });

});
