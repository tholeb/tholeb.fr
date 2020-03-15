$(document).ready(function() {
  $.getJSON('../resources/data/police_bdd.php', function(data) {
  });
  var data = {
     "January": 65,
     "February": 59,
     "March": 80,
     "April": 81,
     "May": 56,
     "June": 55
  }
  const CHART = document.getElementById('police_bddchart');

  var lineChart = new Chart(CHART, {
     type: 'line',
     data: {
        labels: Object.keys(data),
        datasets: [{
           label: 'My first dataset',
           fill: false,
           lineTension: 0,
           backgroundColor: "rgba(75,192,192,0.4)",
           borderColor: "rgba(75,192,192,1)",
           borderCapStyle: 'butt',
           borderDash: [],
           borderDashOffset: 0.0,
           borderJointStyle: 'miter',
           data: Object.values(data)
        }]
     }
  });
});
