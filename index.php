<?php 
    class Movie {
        public $title;
        public $length;
        public $genre;
        public $price;
        public $year;

        public function __construct($_title, $_length, $_genre, $_year) {
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

    // Ciao Esmeralda movie
    $ciaoEsmeralda = new Movie('Ciao Esmeralda', '1h25m', 'Romantico, Drammatico', 2012);

    // Le avventure di Cecil
    $leAvvDiCecil = new Movie('Le Avventure di Cecil', '1h50m', 'Avventura', 2017)
    
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
    <!-- Ciao Esmeralda -->
    <div class="ciao-esmeralda">
        <h2>Titolo Film: "<?php echo $ciaoEsmeralda->title ?>"</h2>
        <ul>
            <li>Durata: <?php echo $ciaoEsmeralda->length ?></li>
            <li>Genere: <?php echo $ciaoEsmeralda->genre ?></li>
            <li>Prezzo: <?php echo $ciaoEsmeralda->setDiscout() ?> &euro; </li>
            <li>Anno di uscita: <?php echo $ciaoEsmeralda->year ?></li>
        </ul>
    </div>

    <!-- Le Avventure di Cecil -->
    <div class="le-avv-di-cecil">
        <h2>Titolo Film: "<?php echo $leAvvDiCecil->title ?>"</h2>
        <ul>
            <li>Durata: <?php echo $leAvvDiCecil->length ?></li>
            <li>Genere: <?php echo $leAvvDiCecil->genre ?></li>
            <li>Prezzo: <?php echo $leAvvDiCecil->setDiscout() ?> &euro; </li>
            <li>Anno di uscita: <?php echo $leAvvDiCecil->year ?></li>
        </ul>
    </div>
</body>
</html>