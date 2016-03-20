<?php 
	$dari = $_GET['dari'];
	$ke = $_GET['ke'];
	$berat = $_GET['berat'];
	$submit = $_GET['submit'];
    $json_url = 'http://localhost/ongkir/json.php?dari='.$dari.'&ke='.$ke.'&berat='.$berat.'&tiki=tiki&submit='.$submit.'';
    $ch = curl_init ($json_url);
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => array('Content-type: application/json'),
    );
    curl_setopt_array ($ch, $options); // setting curl options
    $result = curl_exec($ch); // getting json result string
    
    $decode = json_decode($result, true);
    echo $decode['dari']."<br>";
    echo $decode['ke'];
    foreach ($decode['ongkos'] as $row) {
        echo "<div id='content'>";
        echo "<p id='judul'>".$row['layanan'] ."</p>";
        echo "<p id='isi'>".$row['tarif'] ."</p>";
        echo "</div>";
    }

?>