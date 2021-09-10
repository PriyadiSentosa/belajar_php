<?php
$movie = '{
    "Instructions": "delete everything in this object and make your own JSON object using different data.",
    "Title": "The Graduate",
    "Year": "1967",
    "Rated": "Approved",
    "Released": "22 Dec 1967",
    "Runtime": "106 min",
    "Genre": [
      "Comedy",
      "Drama",
      "Romance"
    ],
    "Director": "Mike Nichols",
    "Writers": [
      "Calder Willingham (screenplay)",
      "Buck Henry (screenplay)",
      "Charles Webb (based on the novel by)"
    ],
    "Actors": [
      "Anne Bancroft",
      "Dustin Hoffman",
      "Katharine Ross",
      "William Daniels"
    ],
    "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "poster":"spider-verse.jpg",
    "imdbRating": "8.1",
    "imdbVotes": "183,131",
    "imdbID": "tt0061722"
  }';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Spiderman</title>
</head>
<body>
    <?php $data = json_decode($movie);?>
    <center><?php echo $data->Title . "<br>";?></center> 
    <center><img src="spider-verse.jpg" width="200" height="300"></center><br>
    <?php echo "<p>" . $data->Plot . "<br>";?>
    <?php echo "<b>Tahun Rilis</b> : " . $data->Year . "<br>";?>
    <?php echo "<b>Tanggal Rilis</b> : " . $data->Released . "<br>";?>
    <?php echo "<b>Durasi FIlm</b> : " . $data->Runtime . "<br>";?>
    <?php echo "<b>Genre</b>     : " . implode(" , ", $data->Genre) . "<br>";?>
    <?php echo "<b>Directur</b> : " . $data->Director . "<br>";?>
    <?php echo "<b>Writers</b>  : " . implode(" , ", $data->Writers) . "<br>";?>
    <?php echo "<b>Actors</b>  : " . implode(" , ", $data->Actors) . "<br>";?>
    <?php echo "<b>Bahasa</b>  : " . $data->Language . "<br>";?>
    <?php echo "<b>Negara</b>  : " . $data->Country . "<br>";?>
    <?php echo "<b>Penghargaan</b> : " . $data->Awards . "<br>";?>
    <?php echo "<b>Rating</b> :  " . $data->imdbRating. "<br>" ;?>
    <?php echo "<b>Vote</b> :  " . $data->imdbVotes. "<br>" ;?>
    <?php echo "<b>ID</b> :  " . $data->imdbID. "<br>" ;?>
    
</body>
</html>