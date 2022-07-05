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
    $userName = $_POST['Imie'];
    $bledy = $_POST['Imie'];
    $dateOd = $_POST['DataOd'];
    $dateDo = $_POST['DataDo'];
    if(empty($userName))
    $mysql = "SELECT * FROM Confronter WHERE Data BETWEEN '$dateOd' AND '$dateDo'";
    else
	$mysql = "SELECT * FROM Confronter WHERE Imie='$userName' AND Data BETWEEN '$dateOd' AND '$dateDo'";
	if ($rezultat = @$polaczenie->query($mysql))
	{
		$ile_rekordow = $rezultat->num_rows;
		if ($ile_rekordow > 0)
		{
            $json = mysqli_fetch_all ($rezultat, MYSQLI_ASSOC);
			echo json_encode($json );


			$rezultat->close();
		}
		else
		{
			echo 'Brak rekordow';
		}
	}
	ELSE
	{
		echo $ile_rekordow;
	}	


	$polaczenie->close();
}
?>