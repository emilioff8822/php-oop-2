<?php

include_once __DIR__ .'/models/Cane.php';
include_once __DIR__ .'/models/Gatto.php';
include_once __DIR__ .'/models/Prodotto.php';

$cuccia = new Prodotto(
    'Cuccia per cani', 
    'Ferplast', 
    45.00, 
    'Cuccia', 
    'Cane', 
    'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/ferplast/dogvilla/3/400/4_top_seller_1000x1000_3.jpg', 
    [], 
    ['Legno' , 'Truciolato', 'Plastica', 'PVC']
);

$arrayProdotti=[
    $cuccia,
    new Prodotto('Cibo per cani', 'Pedigree', 10.99, 'Cibo', 'Cane', 'https://shop-cdn-m.mediazs.com/bilder/fai/scorta/pedigree/adult/classic/x/g/umido/cane/1/800/612758_pedigree_classic_24x400g_1.jpg', ['Carne', 'Carote']),
    new Prodotto('Cibo per gatti', 'Whiskas', 8.99, 'Cibo', 'Gatto', 'https://images.eprice.it/nobrand/0/Lightbox/462/202927462/BEFC0587-E47B-41C6-B169-41EF2C94FDEF.jpg', ['Pesce']),
];

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
    integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
    crossorigin='anonymous' />
  <title>Negozio online di prodotti per animali</title>
</head>

<body>
  <div class="container my-5">
    <h1>Negozio di prodotti per animali</h1>
    <div class="row">
      <?php foreach ($arrayProdotti as $prodotto): ?>
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="<?php echo $prodotto->getImmagine() ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $prodotto->getNome() ?></h5>
            <p class="card-text">Categoria: <?php echo $prodotto->getCategoria() ?>, Tipo:
              <?php echo $prodotto->getTipo() ?> </p>
            <p class="card-text">Marca: <?php echo $prodotto->getMarca() ?> </p>
            <p class="card-text">Prezzo: <?php echo $prodotto->getPrezzo() ?>€</p>

            <?php if (!empty($prodotto->getIngredienti())): ?>
            <p class="card-text">Ingredienti:
            <ul>
              <?php foreach ($prodotto->getIngredienti() as $ingrediente): ?>
              <li><?php echo $ingrediente; ?></li>
              <?php endforeach; ?>
            </ul>
            </p>
            <?php endif; ?>

            <?php if (!empty($prodotto->getMateriali())): ?>
            <p class="card-text">Materiali:
            <ul>
              <?php foreach ($prodotto->getMateriali() as $materiale): ?>
              <li><?php echo $materiale; ?></li>
              <?php endforeach; ?>
            </ul>
            </p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>