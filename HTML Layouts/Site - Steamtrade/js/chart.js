/* Chart */

(async function () {

  const data = [
    { date: 'Окт 27, 2022', price: 150 },
    { date: 'Окт 27, 2022', price: 100 },
    { date: 'Окт 27, 2022', price: 2000 },
    { date: 'Окт 27, 2022', price: 500 },
    { date: 'Окт 27, 2022', price: 1233 },
    { date: 'Окт 27, 2022', price: 150 },
    { date: 'Окт 27, 2022', price: 100 },
    { date: 'Окт 27, 2022', price: 2000 },
    { date: 'Окт 27, 2022', price: 500 },
    { date: 'Окт 27, 2022', price: 1233 },
    { date: 'Окт 27, 2022', price: 150 },
    { date: 'Окт 27, 2022', price: 100 },
    { date: 'Окт 27, 2022', price: 2000 },
    { date: 'Окт 27, 2022', price: 500 },
  ]

  const Text = {
    TITLE: 'Цены',
    LABEL: 'Цена'
  }

  if (document.getElementById('acquisitions')) {

    new Chart(
      document.getElementById('acquisitions'),
      {
        type: 'line',
        options: {
          animation: true,
          responsive: false,
          plugins: {
            title: {
              display: true,
              text: Text.TITLE,
            },
            legend: {
              display: true
            },
            tooltip: {
              enabled: true
            },
            colors: {
              enabled: false
            }
          }
        },
        interaction: {
          intersect: true,
        },
        data: {
          labels: data.map(row => row.date),
          datasets: [
            {
              label: Text.LABEL,
              data: data.map(row => row.price),
              borderColor: '#E50501',
              backgroundColor: '#FF0501',
              cubicInterpolationMode: 'monotone',
            }
          ]
        }
      }
    )

  }
})()