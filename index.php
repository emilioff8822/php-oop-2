<?php

include_once __DIR__ .'/models/Cane.php';
include_once __DIR__ .'/models/Gatto.php';
include_once __DIR__ .'/models/Prodotto.php';

$arrayProdotti=[
    new Prodotto('Cibo per cani', 'Pedigree', 10.99, 'Cibo', new Cane('Cane', 'Labrador'), 'https://picsum.photos/id/237/200/300'),
    new Prodotto('Cibo per gatti', 'Whiskas', 8.99, 'Cibo', new Gatto('Gatto', 'Siamese'), 'https://picsum.photos/id/1025/200/300'),
    new Prodotto('Cuccia per cani', 'Ferplast', 45.00, 'Cuccia', new Cane('Cane', 'Bulldog'), 'https://picsum.photos/id/433/200/300'),
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Shop online di prodotti per animali</title>
</head>
<body>
<div class="container my-5">
    <h1>Shop di prodotti per animali</h1>
    <div class="row">
        <?php foreach ($arrayProdotti as $prodotto): ?>
        <div class="col-4">
            <div class="card">

                <img class="card-img-top" src="<?php echo $prodotto->immagine ?>" alt="Card image cap">
                <div class="card-body">
                    
                <h5 class="card-title"><?php echo $prodotto->nome ?></h5>
                    <p class="card-text">Categoria: <?php echo $prodotto->getCategoria() ?>, Razza: <?php echo $prodotto->getRazza() ?>, Tipo: <?php echo $prodotto->tipo ?> </p>
                    <p class="card-text">Marca: <?php echo $prodotto->marca ?> </p>
                    <p class="card-text">Prezzo: <?php echo $prodotto->prezzo ?>€</p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>