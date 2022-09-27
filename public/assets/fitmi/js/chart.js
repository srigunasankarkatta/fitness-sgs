Highcharts.chart('barchart01', {
  chart: {
    type: 'column'
  },
  colors: ['#F4AE86', '#D47FA6'],
  title: {
    text: 'Statistics'
  },
  // subtitle: {
  //   text: 'Source: WorldClimate.com'
  // },
  xAxis: {
    categories: [
      '6:00am',
      '6:30am',
      '7:00am',
      '7:30am',
      '8:00am',
      '8:30am',
      '9:00am',
      '9:30am',
      '5:00pm',
      '5:30pm',
      '6:00pm',
      '6:30pm',
      '7:00pm',
      '7:30pm',
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      // text: 'Rainfall (mm)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0,
      borderWidth: 0,
      borderRadius:0,
    }
  },
  series: [{
    name: 'Workout',
    data: [10, 8, 12, 18, 12, 7, 2, 13, 9, 11, 16, 4, 12, 17, 2, 1, 3, 15]

  }, {
    name: 'Users',
    data: [2, 4, 6, 8, 2, 7, 12, 18, 2, 7, 12, 18, 2, 7, 12, 18, 13, 15]

  }]
});

Highcharts.chart('barchart02', {
  chart: {
    type: 'column'
  },
  colors: ['#F4AE86', '#D47FA6'],
  title: {
    text: 'Statistics'
  },
  // subtitle: {
  //   text: 'Source: WorldClimate.com'
  // },
  xAxis: {
    categories: [
      '6:00am',
      '6:30am',
      '7:00am',
      '7:30am',
      '8:00am',
      '8:30am',
      '9:00am',
      '9:30am',
      '5:00pm',
      '5:30pm',
      '6:00pm',
      '6:30pm',
      '7:00pm',
      '7:30pm',
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      // text: 'Rainfall (mm)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0,
      borderWidth: 0,
      borderRadius:0,
    }
  },
  series: [{
    name: 'Workout',
    data: [10, 8, 12, 18, 12, 7, 2, 13, 9, 11, 16, 4, 12, 17, 2, 1, 3, 15]

  }, {
    name: 'Users',
    data: [2, 4, 6, 8, 2, 7, 12, 18, 2, 7, 12, 18, 2, 7, 12, 18, 13, 15]

  }]
});

Highcharts.chart('barchart03', {
  chart: {
    type: 'column'
  },
  colors: ['#F4AE86', '#D47FA6'],
  title: {
    text: 'Statistics'
  },
  // subtitle: {
  //   text: 'Source: WorldClimate.com'
  // },
  xAxis: {
    categories: [
      '6:00am',
      '6:30am',
      '7:00am',
      '7:30am',
      '8:00am',
      '8:30am',
      '9:00am',
      '9:30am',
      '5:00pm',
      '5:30pm',
      '6:00pm',
      '6:30pm',
      '7:00pm',
      '7:30pm',
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      // text: 'Rainfall (mm)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0,
      borderWidth: 0,
      borderRadius:0,
    }
  },
  series: [{
    name: 'Workout',
    data: [10, 8, 12, 18, 12, 7, 2, 13, 9, 11, 16, 4, 12, 17, 2, 1, 3, 15]

  }, {
    name: 'Users',
    data: [2, 4, 6, 8, 2, 7, 12, 18, 2, 7, 12, 18, 2, 7, 12, 18, 13, 15]

  }]
});