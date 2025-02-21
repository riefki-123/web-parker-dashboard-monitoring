<?php
// Koneksi ke database
$servername = "localhost";
$username   = "root"; 
$password   = ""; 
$dbname     = "rfid_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil jumlah kendaraan terdaftar
$sql_count = "SELECT COUNT(*) AS terisi FROM rfid_data";
$result    = $conn->query($sql_count);
$row       = $result->fetch_assoc();

$terisi        = $row['terisi'];
$totalKapasitas = 32;
$tersedia      = $totalKapasitas - $terisi;

$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RIOT - Parker</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- JSCharting (untuk gauge) -->
  <script src="https://code.jscharting.com/latest/jscharting.js"></script>

      <!--Font yang saya gunakan dari Google-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:wght@300..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <!-- Font Awesome untuk memunculkan ikon media sosial bagian Footer-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
  <header>
    <h1>Dashboard Parking Organizer</h1>
  </header>

  <main>
    <div class="container">
      <!-- Bagian Kartu Info -->
      <div class="card-container">
        <div class="card">
          <h2>Total Kapasitas</h2>
          <p><?php echo $totalKapasitas; ?> </p>
        </div>
        <div class="card">
          <h2>Terisi</h2>
          <p id="terisi"><?php echo $terisi; ?> </p>
        </div>
        <div class="card">
          <h2>Tersedia</h2>
          <p id="tersedia"><?php echo $tersedia; ?> </p>
        </div>
      </div>

        <!-- Gauge dalam Card -->
        <div class="card-gauge">
            <h3>Kapasitas Parkir</h3>
            <div class="gauge-container">
            <div id="chartDiv"></div>
            </div>
        </div>

</main>
    <footer>
      <p>R.I.O.T &#169; 2025 Republic Information Technology</p>
			<div>
				<a href="https://chat.whatsapp.com/E3CBOGV8Z80HKneGBmvuWm" target="_blank" title="Grup WhatsApp"><i class="fab fa-whatsapp"></i></a>
				<a href="https://www.linkedin.com/in/riefki-nugraha/" target="_blank" title="Linkedin RIT"><i class="fab fa-linkedin-in"></i></a>
				<a href="https://www.instagram.com/republic_it/" target="_blank" title="Instagram RIT"><i class="fab fa-instagram"></i></a>
				<a href="mailto:republicitechnology@gmail.com" target="_blank" title="Email RIT"><i class="fa fa-envelope"></i></a>
			</div>
    </footer>

  <!-- File JS terpisah -->
  <script src="js/script.js"></script>
</body>
</html>
