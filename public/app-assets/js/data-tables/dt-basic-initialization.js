/*=========================================================================================
    File Name: datatable-basic.js
    Description: Basic Datatable
    ----------------------------------------------------------------------------------------
    Item Name: Apex - Responsive Admin Theme
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function () {

  // zero configuration
  $('.zero-configuration').DataTable();

  // complex headers
  $('.complex-headers').DataTable();

  // dom positioning
  $('.dom-positioning').DataTable({
    "dom": "<'row'<'col-md-6'i><'col-md-6 text-right'f>>rt<'row'<'col-md-6'l><'col-md-6'p>><'clear'>"
  });

  // Scroll - vertical, dynamic height
  $('.dynamic-height').DataTable({
    scrollY: 'calc(var(--vh, 1vh) * 50)',
    scrollCollapse: true,
    paging: false
  });

});
