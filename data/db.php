<?php
require_once __DIR__ . '../../Model/products.php';
require_once __DIR__ . '../../Model/games.php';
require_once __DIR__ . '../../Model/food.php';
require_once __DIR__ . '../../Model/accessories.php';

$food = new Food('Royal Canin Mini Adult', '43.99', 'Cani', 'https://th.bing.com/th/id/OIP.C3zzw1OWmJVUd4Xde8jCQgHaHa?w=201&h=202&c=7&r=0&o=5&dpr=1.5&pid=1.7', '545g', 'Prosciutto , Riso');

$food2 = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '44.99', 'Cani', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', '600g', 'Manzo , Cereali');

$food3 = new Food('Almo Nature Cat Daily Lattina', '34.99', 'Gatti', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', '400g', 'Tonno , Pollo , Prosciutto');

$food4 = new Food('Mangime per Pesci Guppy in Fiocchi', '2.95', 'Pesci', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', '400g', 'Pesci e sotto prodotti pesci , Cereali , Lieviti , ALghe');

$accessories = new Accessories('Voliera Wilma in Legno', '184,99', 'Uccelli', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Gabbia', 'Legno', 'M: L 83 x P 67 x H 153 cm');

$accessories2 = new Accessories('Cartucce Filtranti per Filtro EasyCrystal', '2,99', 'Pesci', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Filtri', 'Materiale espanso', 'ND');

$game = new Games('Kong Classic', '13,49', 'Cani', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Galleggia e Rimbalza', '8,5 cm x 10 cm');

$game2 = new Games('Topini di peluche Trixie', '4,99', 'Gatti', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Morbido con codina in corda', '8,5 cm x 10 cm');

$products = [$food, $food2, $food3, $food4, $accessories, $accessories2, $game, $game2];
