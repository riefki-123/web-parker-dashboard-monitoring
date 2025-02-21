$(document).ready(function () {
    // Simpan objek chart di variable global
    let myGaugeChart;
  
    // Fungsi ambil data
    function fetchData() {
      $.ajax({
        url: 'data.php',   // Endpoint untuk ambil data
        method: 'GET',
        dataType: 'json',
        success: function(response) {
          // response: { terisi: X, tersedia: Y, total: 32 }
          let terisi = response.terisi;
          let tersedia = response.tersedia;
          let total = response.total;
  
          // Update angka di card
          $('#terisi').text(terisi);
          $('#tersedia').text(tersedia);
  
          // Hitung persentase
          let percentage = Math.round((terisi / total) * 100);
  
          // Update gauge
          updateGauge(percentage);
        },
        error: function(err) {
          console.log('Error:', err);
        }
      });
    }
  
    // Fungsi update gauge
    function updateGauge(value) {
      // value = persentase (0-100)
  
      // Jika chart sudah pernah dibuat, hapus dulu
      if (myGaugeChart) {
        myGaugeChart.dispose();
      }
  
      let palette = ['#AAF78B', '#FFE853', '#EE6352'];
      myGaugeChart = new JSC.chart('chartDiv', {
        legend_visible: false,
        palette: {
          pointValue: '%yValue',
          ranges: [
            { value: [0, 30], color: palette[0] },
            { value: [30, 70], color: palette[1] },
            { value: [70, 100], color: palette[2] }
          ]
        },
        xAxis: [
          {
            id: 'xAx1',
            scale: { range: [0, 1] }
          }
        ],
        yAxis: [
          {
            id: 'yAx1',
            scale: { range: [0, 100], interval: 10 },
            line: {
              width: 10,
              color: 'smartPalette'
            },
            defaultTick: {
              label_visible: false
            }
          }
        ],
        defaultTooltip_enabled: false,
        defaultSeries: {
          type: 'gauge marker',
          opacity: 1,
          shape: {
            size: '86%',
            padding: 0,
            label: {
              text: '%sum%',
              align: 'center',
              verticalAlign: 'middle',
              style: { fontSize: '45px' }
            }
          }
        },
        defaultPoint: {
          marker: {
            type: 'circle',
            outline: { width: 8 }
          }
        },
        series: [
          {
            yAxis: 'yAx1',
            xAxis: 'xAx1',
            points: [{ id: 'value', x: 0, y: value }]
          }
        ]
      });
    }
  
    // Panggil pertama kali
    fetchData();
    // Perbarui setiap 3 detik
    setInterval(fetchData, 3000);
  });
  