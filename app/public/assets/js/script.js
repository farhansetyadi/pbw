
$(document).ready(function () {
  $('#cancel').click(function(){
    window.history.go(-1);
  });
  $('table').DataTable({
    // info:false
    dom: '<"row"<"col-2"l><"col-7"B><"col-3"f><"col-12"t><"col-6"i><"col-6"p>>',
    buttons: [
      // 'colvis',
      {
        extend: 'colvis',
        text: '<i class="fa fa-columns"> </i> Column Visibility',
      },
      {
        extend: 'copy',
        exportOptions: {
          columns: ':visible'
        },
        text: '<i class="fa fa-files-o"> </i> Copy',
      },
      {
        extend: 'pdf',
        exportOptions: {
          columns: ':visible'
        },
        text: '<i class="fa fa-file-pdf-o"> </i> PDF',
        download: 'open'
      },
      // {
      //   extend: 'csv',
      //   exportOptions: {
      //     columns: ':visible'
      //   },
      //   text: '<i class="fa fa-file-o"> </i> CSV'
      // },
      {
        extend: 'excel',
        exportOptions: {
          columns: ':visible'
        },
        text: '<i class="fa fa-file-excel-o"> </i> Excel',
        
      },
      {
        extend: 'print',
        exportOptions: {
          columns: ':visible'
        },
        text: '<i class="fa fa-print"> </i> Print'
      },
      {
        text: '<i class="fa fa-pie-chart"></i> Grafik',
        action: function (e,dt,node,conf){
          window.location = window.location.href + '/chart'
        }
      },
    ]
  });

  const chartConfigs = {
    type: "column2d",
    width: "100%",
    height: "400",
    dataFormat: "jsonurl",
    dataSource: window.location.href + '_data'
}
// Create a chart container
$("#chart-container").insertFusionCharts(chartConfigs);


  // const chartData = [
  //   {
  //     label: "Venezuela",
  //     value: "290"
  //   },
  //   {
  //     label: "Saudi",
  //     value: "260"
  //   },
  //   {
  //     label: "Canada",
  //     value: "180"
  //   },
  //   {
  //     label: "Iran",
  //     value: "140"
  //   },
  //   {
  //     label: "Russia",
  //     value: "115"
  //   },
  //   {
  //     label: "UAE",
  //     value: "100"
  //   },
  //   {
  //     label: "US",
  //     value: "30"
  //   },
  //   {
  //     label: "China",
  //     value: "30"
  //   }
  // ];
  // const chartConfigs = {
    // type: "column2d",
    // width: "700",
    // height: "400",
    // dataFormat: "json",
    // dataFormat: "jsonurl",
    // dataSource: window.location.href + '/chart'
    // dataSource: {
    //     // Chart Configuration
    //     "chart": {
    //         "caption": "Grafik Jumlah Mahasiswa",
    //         "subCaption": "Berdasarkan Agama",
    //         "xAxisName": "Agama",
    //         "yAxisName": "Mahasiswa",
    //         // "numberSuffix": "K",
    //         "theme": "fusion",
    //     },
    //     // Chart Data
    //     "data": chartData
    // }
  // };
  // $("#chart-container").insertFusionCharts(chartConfigs);
  //Include fusioncharts
// var FusionCharts = require('fusioncharts');

// //Include chart modules
// var Charts = require('fusioncharts/fusioncharts.charts');

// //Include the theme file
// var FusionTheme = require('fusioncharts/themes/fusioncharts.theme.fusion');

// var $ = require('jquery');
// var jQFc = require('jquery-fusioncharts');

// //Pass FusionCharts as dependency
// Charts(FusionCharts);

// //Pass theme as dependency
// FusionTheme(FusionCharts);

// $('#chart-container').insertFusionCharts({
//   type: 'column2d',
//   width: 700,
//   height: 400,
//   dataFormat: 'jsonurl',
//   dataSource: window.location.href + '/chart'// url of datasource
// });
  
});