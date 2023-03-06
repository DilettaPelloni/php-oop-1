<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    class Movie {
        //attributi
        private $title;
        private $genres;
        private $overview;
        private $posterPath;
        private $voteAverage;
        //costruttore
        function __construct(
            string $_title,
            array $_genres,
            string $_overview,
            string $_posterPath,
            float $_voteAverage
        ){
            $this->setTitle ($_title);
            $this->setGenres ($_genres);
            $this->setOverview ($_overview);
            $this->setPosterPasth ($_posterPath);
            $this->setVoteAverage ($_voteAverage);
        }
        //setters
        public function setTitle ($_title) {
            $this->title = $_title;
        }
        public function setGenres ($_genres) {
            $this->genres = $_genres;
        }
        public function setOverview ($_overview) {
            $this->overview = $_overview;
        }
        public function setPosterPasth ($_posterPath) {
            $this->posterPath = $_posterPath;
        }
        public function setVoteAverage ($_voteAverage) {
            $this->voteAverage = $_voteAverage;
        }
        //getters
        public function getTitle () {
            return $this->title;
        }
        public function getGenres () {
            return $this->genres;
        }
        public function getOverview () {
            return $this->overview;
        }
        public function getPosterPasth () {
            return $this->posterPath;
        }
        public function getVoteAverage () {
            return $this->voteAverage;
        }
    }//classe Movie

    //prima istanza
    $movie1 = new Movie (
        'Un ponte per Terabithia',
        ['Avventura', 'Dramma', 'Famiglia'],
        'Jesse è un ragazzino che ha un amore per il disegno e la pittura. La famiglia e la scuola, però non gli danno credito e, spesso, è irriso da qualche bulletto di classe. L\'improvvisa e magica amicizia con Leslie lo conduce in un mondo di fantasia, dove la creatività può essere liberata.',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/cC6MB6b7oTtiR71oMhEF6Ewpsnu.jpg',
        7
    );

    //seconda istanza
    $movie2 = new Movie (
        'Piccole donne',
        ['Dramma', 'Romance', 'Storia'],
        'Dopo la fine della guerra di secessione americana le sorelle March dovranno affrontare problemi economici, sentimentali e sociali. Tra tutte spicca la figura di Jo, determinata a trovare la propria libertà e indipendenza, spronando anche le sorelle a dare spazio al proprio talento, nonostante le rigide imposizioni della società di quel periodo.',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/7WxwYuJLFXFBU53i02XQ56p3Lj3.jpg',
        8
    );

    //terza istanza
    $movie3 = new Movie (
        'Divergent',
        ['Azione', 'Avventura', 'Fantascienza'],
        'In un futuro dispotico, in base alle caratteristiche delle loro personalità gli individui sono raggruppati in varie fazioni. La sedicenne Tris Prior (Shailene Woodley), invece, non appartiene a nessun gruppo e rientra tra coloro che vengono definiti "divergenti". Scoprendo una cospirazione tesa ad eliminare tutti i divergenti, Tris dovrà capire cosa li rende così pericolosi prima che sia troppo tardi.',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/wSan6AKkI0qeDVBHpLJnaZA3es1.jpg',
        6
    );

    //array
    $movieArray = [$movie1, $movie2, $movie3];
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

        <title>PHP OOP 1</title>
    </head>
    <body>
        <header class="py-4 text-light bg-primary">
            <div class="container">
                <h1>PHP OOP 1</h1>
            </div>
        </header>

        <main class="py-4">
            <div class="container">
                <!-- <ul>
                    <li>
                        <span class="fw-bold">Titolo:</span> 
                        <?php echo $movie1->getTitle(); ?>
                    </li>
                    <li>
                        <span class="fw-bold">Generi:</span>
                        <?php echo implode(", ", $movie1->getGenres()) ?>
                    </li>
                    <li>
                        <span class="fw-bold">Descrizione:</span>
                        <?php echo $movie1->getOverview();?>
                    </li>
                    <li>
                        <img src="<?php echo $movie1->getPosterPasth(); ?>" alt="<?php echo $movie1->getTitle(); ?>">
                    </li>
                    <li>
                        <span class="fw-bold">Valutazione:</span>
                        <?php echo $movie1->getVoteAverage(); ?>
                    </li>
                </ul>
                <ul>
                    <li>
                        <span class="fw-bold">Titolo:</span> 
                        <?php echo $movie2->getTitle(); ?>
                    </li>
                    <li>
                        <span class="fw-bold">Generi:</span>
                        <?php echo implode(", ", $movie2->getGenres()) ?>
                    </li>
                    <li>
                        <span class="fw-bold">Descrizione:</span>
                        <?php echo $movie2->getOverview();?>
                    </li>
                    <li>
                        <img src="<?php echo $movie2->getPosterPasth();?>" alt="<?php echo $movie2->getTitle();?>">
                    </li>
                    <li>
                        <span class="fw-bold">Valutazione:</span>
                        <?php echo $movie2->getVoteAverage();?>
                    </li>
                </ul> -->


                <div class="row">
                    <?php foreach ($movieArray as $movie) { ?>

                        <div class="col-4">
                            <!-- CARD -->
                            <div class="card">
                                <!-- CARD IMG -->
                                <img src="<?php echo $movie->getPosterPasth(); ?>" class="card-img-top" alt="<?php echo $movie->getTitle(); ?>">
                                <!-- CARD BODY -->
                                <div class="card-body">
                                    <!-- LIST GROUP -->
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <span class="fw-bold">Titolo:</span>
                                            <?php echo $movie->getTitle(); ?>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="fw-bold">Generi:</span>
                                            <?php echo implode(", ", $movie->getGenres()) ?>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="fw-bold">Valutazione:</span>
                                            <?php echo $movie->getVoteAverage();?>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="m-0 fw-bold">Descrizione:</p>
                                            <?php echo $movie->getOverview();?>
                                        </li>
                                    </ul>
                                </div><!-- CARD BODY -->
                            </div><!-- CARD -->
                        </div><!-- COL -->
                    
                    <?php } ?>
                </div><!-- ROW -->


            </div><!-- CONTAINER -->
        </main>
    </body>
</html>

