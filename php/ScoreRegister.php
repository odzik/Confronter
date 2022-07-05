<?php 
session_start();
require_once "connect.php";
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
$polaczenie = @new mysqli($host, $logindb, $haslodb, $dbname);
$polaczenie->set_charset("utf8mb4");
if ($polaczenie->connect_errno!=0)
{
	echo<<<END
	
	<script type="text/javascript">
	alert("Error: ".'$polaczenie->connect_errno.'" Opis: ".'$polaczenie->connect_error');
	
	</script>
END;
}
else
{	
        $wynik = $_POST['Wynik'];
        $bledy = $_POST['Bledy'];
        $imie = $_POST['Imie'];
        $datetime = date_create()->format('Y-m-d');
        -$zapytanie = "INSERT INTO Confronter (Imie, Wynik, Bledy, Data) VALUES ('$imie', '$wynik', '$bledy', '$datetime')";

        if ($polaczenie->query($zapytanie)===TRUE){
            echo "Koniec gry, Twój wynik to: " . $wynik;
        }
        else{
            echo mysqli_error();
        }


	$polaczenie->close();
}
?>