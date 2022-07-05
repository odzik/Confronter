<?php
class start {
    public $panstwo;
    public $stolica;
    public $flaga;
  
    public function  __construct($panstwo, $stolica, $flaga, $pytanie) {
      $this->panstwo = $panstwo;
      $this->stolica = $stolica;
      $this->flaga = $flaga;
      $this->pytanie = $pytanie;
    }
  }
  $ListOfObjects[] = new start('Polska', 'Warszawa', 'Flags/poland.svg', "Polski"); 
  $ListOfObjects[] = new start('Stany Zjednoczone', 'Waszyngton', 'Flags/united-states-of-america.svg', "Stanów Zjednoczonych"); 
  $ListOfObjects[] = new start('Belgia', 'Bruksela', 'Flags/belgium.svg',"Belgi"); 
  $ListOfObjects[] = new start('Niemcy', 'Berlin', 'Flags/germany.svg', "Niemiec"); 
  $ListOfObjects[] = new start('Ukraina', 'Kijów', 'Flags/ukraine.svg', "Ukrainy"); 
  $ListOfObjects[] = new start('Turcja', 'Ankara', 'Flags/turkey.svg', "Turcji"); 
  $ListOfObjects[] = new start('Czechy', 'Praga', 'Flags/czech-republic.svg', "Czech"); 
  $ListOfObjects[] = new start('Słowacja', 'Bratysława', 'Flags/slovakia.svg', "Słowacji"); 
  $ListOfObjects[] = new start('Rosja', 'Moskwa', 'Flags/russia.svg', "Rosji"); 
  $ListOfObjects[] = new start('Portugalia', 'Lizbona', 'Flags/portugal.svg', "Portugali"); 
  $ListOfObjects[] = new start('Rumunia', 'Bukareszt', 'Flags/romania.svg', "Rumuni"); 
  $ListOfObjects[] = new start('Litwa', 'Wilno', 'Flags/lithuania.svg', "Litwy"); 
  
    $liczba = $_POST['Liczba'];
    $jsonData = json_encode( $ListOfObjects );
    header("Content-Type: application/json; charset=utf-8");
    echo $jsonData;