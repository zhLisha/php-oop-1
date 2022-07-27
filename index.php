<?php 
    class Movie {
        public $title;
        public $length;
        public $genre;
        public $price;
        public $year;

        public function __construct($_title, $_year) {
            $this->title = $_title;
            $this->length = $_length;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        public function setDiscout() {
            if($this->year < 2015) {
                $this->price = 5;
            } else {
                $this->price = '9.90';
            };
            return $this->price;
        }
    }

    $releaseYear = 2012;
    $movieDetails = new Movie('Ciao Esmeralda', $releaseYear);
    $movieDetails->length = '1h25m';
    $movieDetails->genre = 'Romantico, Drammatico';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Titolo Film: "<?php echo $movieDetails->title ?>"</h1>
    <ul>
        <li>Durata: <?php echo $movieDetails->length ?></li>
        <li>Genere: <?php echo $movieDetails->genre ?></li>
        <li>Prezzo: <?php echo $movieDetails->setDiscout() ?> &euro; </li>
        <li>Anno di uscita: <?php echo $movieDetails->year ?></li>
    </ul>
</body>
</html>