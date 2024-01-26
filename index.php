<?php
require_once __DIR__ . '/Models/Movie.php';


    $movies = [
        new Movie('Ritorno al Passato', [ 'Gino Audi Coppola', 'Gavino Pancetta', 'Tommaso Crociera' ], 'Uno straordinario film su una storia straordinaria',
        'https://pictures.abebooks.com/inventory/31143475235.jpg'),
        new Movie('Apocalisse Ieri', [ 'Gino Audi Coppola', 'Brandon Mando', 'Nicola Gabbia' ], 'La guerra in Irpinia contro il terremoto apocalittico',
        'https://static.displate.com/280x392/displate/2023-03-16/465fb8727834bbc4ef06565037f66a15_6df7ba0a8e1463eb66027136bfe37537.jpg'),
        new Movie('Vecchio CINEMA INFERNO', [ 'Alex Brotti', 'Nando Nandi', 'Riccardino Fuffolo' ], 'Un cinema che non prendeva mai fuoco, finche\'....',
        'https://cdn.cinematerial.com/p/297x/yiyp6hpe/on-fire-movie-poster-md.jpg?v=1691599578'),
        new Movie('Nonno voglio andare al mare', [ 'Nicoletta Bambinuomo', 'Tommaso Matasse' ], 'Una storia vera sul mare e il nonno!',
        'https://product-image.juniqe-production.juniqe.com/media/catalog/product/seo-cache/x800/221/125/221-125-101P/I-Love-The-Sea-Ingrid-Beddoes-Poster.jpg'),
        new Movie('Il maglio giallo', [ 'Morgano Uomolibero', 'Giuditta Adottiva' ], 'Storia di un grande uomo che non voleva indossare il maglio giallo',
        'https://i.ebayimg.com/images/g/xkgAAOSwpspjJdfg/s-l1200.webp'),
        new Movie('Vado al concerto pure se sto male', [ 'Elisabetta Sarta', 'Paolo Uomonuovo', 'Sonno Penna' ], 'Un film di una storia un po\' curiosa un po\' masochista',
        'https://i.ebayimg.com/images/g/dy0AAOSw3v5Yp7XU/s-l1200.webp'),
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>OOP 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    PHP Object Oriented Programming
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $movie->imageUrl; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php
                                    echo $movie->getTitle();
                                ?>
                            </h5>
                            <h6 class="card-subtitle">
                                <?php echo implode(', ', $movie->getAuthors()); ?>
                            </h6>
                            <p class="card-text">
                                <?php echo $movie->description; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>

