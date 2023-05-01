<x-app-layout>
    <div>
      <canvas id="myChart"></canvas>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'],
          datasets: [
            {
              label: 'reclamation rejete',
              data: [12, 19, 3, 5, 2, 3],
              borderWidth: 1,
              backgroundColor: 'rgba(255, 0, 0, 0.2)', // set the color for dataset 1 (red)
              borderColor: 'rgba(255, 0, 0, 1)' // set the line color for dataset 1 (red)
              
            }, 
            {
              label: '# reclamation traite ',
              data: [45, 55, 12, 54, 54, 5],
              borderWidth: 1,
              backgroundColor: 'rgba(0, 255, 0, 0.2)', // set the color for dataset 3 (green)
              borderColor: 'rgba(0, 255, 0, 1)' // set the line color for dataset 3 (green)
            }, 
            {
                label: '# reclamation en cours',
              data: [1, 4, 6, 2, 10, 40],
              borderWidth: 1,
              backgroundColor: 'rgba(255, 165, 0, 0.2)', // set the color for dataset 2 (orange)
              borderColor: 'rgba(255, 165, 0, 1)' // set the line color for dataset 2 (orange)
            }
          ]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          },
          fill: true // set fill to true to fill the area under the lines
        }
      });
    </script>
  </x-app-layout>
