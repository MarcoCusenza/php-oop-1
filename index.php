<?php
require_once __DIR__ . '/classes/movie.php';

$movies = [
  new Movie(
    "Harry Potter e la Pietra Filosofare",
    "Harry Potter and the Philosopher's Stone",
    "Chris Columbus",
    ["Warner Bros.", "Heyday Films", "1492 Pictures"],
    159,
    ["fantasy", "avventura"],
    2001,
    "inglese",
    [76, 95],
    974755371,
    ["Daniel Radcliffe", "Rupert Grint", "Emma Watson", "Alan Rickman", "Tom Felton", "Maggie Smith", "Robbie Coltrane"],
    "John Williams",
    [3, 0],
    6,
    ["Prime Video", "https://www.primevideo.com/"],
    "https://m.media-amazon.com/images/I/713KEd-8jyL._AC_SL1500_.jpg"
  ),
  new Movie(
    "Il Signore degli Anelli - La Compagnia dell'Anello",
    "The Lord of the Rings: The Fellowship of the Ring",
    "Peter Jackson",
    ["New Line Cinema", "WingNut Films"],
    178,
    ["fantasy", "avventura", "azione", "epico", "drammatico"],
    2001,
    "inglese",
    [88, 100],
    897690072,
    ["Elijah Wood", "Ian McKellen", "Orlando Bloom", "Liv Tyler", "Viggo Mortensen", "Sean Astin", "Cate Blanchett"],
    "Howard Shore",
    [13, 4],
    12,
    ["Prime Video (noleggio)", "https://www.primevideo.com/"],
    "https://pad.mymovies.it/filmclub/2002/01/011/locandina.jpg"
  ),
  new Movie(
    "Kill Bill: Volume 1",
    "Kill Bill: Volume 1",
    "Quentin Tarantino",
    ["Miramax Films", "A Band Apart"],
    106,
    ["azione", "thriller", "splatter"],
    2003,
    "inglese",
    [81, 96],
    180906076,
    ["Uma Thurman", "Lucy Liu", "Vivica A. Fox", "Sonny Chiba", "Michael Parks", "Michael Bowen"],
    "The RZA",
    [0, 0],
    18,
    ["Netflix", "https://www.netflix.com/"],
    "https://www.picclickimg.com/d/l400/pict/334026009670_/Locandina-Rotante-40x60cm-Kill-Bill-Vol-1.jpg"
  ),
  new Movie(
    "Kill Bill: Volume 2",
    "Kill Bill: Volume 2",
    "Quentin Tarantino",
    ["Miramax Films", "A Band Apart"],
    137,
    ["azione", "drammatico", "thriller", "splatter"],
    2004,
    "inglese",
    [80, 93],
    152200000,
    ["Uma Thurman", "David Carradine", "Michael Madsen", "Gordon Liu", "Samuel L. Jackson"],
    "The RZA",
    [0, 0],
    18,
    ["Netflix", "https://www.netflix.com/"],
    "https://cultura.biografieonline.it/wp-content/uploads/2012/09/Kill-Bill-vol-2.jpg"
  ),
  new Movie(
    "Inception",
    "Inception",
    "Christopher Nolan",
    ["Syncopy Films", "Warner Bros", "Legendary Pictures"],
    148,
    ["fantasy", "azione", "thriller"],
    2010,
    "inglese",
    [88, 85],
    836800000,
    ["Leonardo di Caprio", "Joseph Grodon-Levitt", "Elliot Page"],
    "Hans Zimmer",
    [8, 4],
    10,
    ["Netflix", "https://www.netflix.com/", "Prime Video (noleggio)", "https://www.primevideo.com/"],
    "https://www.cinezapping.com/wp-content/uploads/2010/05/inceptionsssposter4.jpg"
  ),
  new Movie(
    "Nightmare before Christmas",
    "Tim Burton's The Nightmare Before Christmas",
    "Henry Selick",
    ["Touchstone Pictures", "Skellington Productions"],
    76,
    ["animazione", "fantasy", "dark", "musical", "natalizio"],
    1993,
    "inglese",
    [88, 85],
    91500000,
    ["Chris Sarandon", "Danny Elfman", "Catherine O'Hara"],
    "Danny Elfman",
    [1, 0],
    7,
    ["Disney+", "https://www.disneyplus.com/", "Prime Video (noleggio)", "https://www.primevideo.com/"],
    "https://m.media-amazon.com/images/I/71UvWgIQNiL._AC_SY606_.jpg"
  ),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>

  <!-- MY CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h1>Film Belli</h1>
    <div class="card-container">
      <?php foreach ($movies as $i => $movie) { ?>
        <div class="card">
          <h3><?php echo $movie->titolo; ?></h3>

        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>