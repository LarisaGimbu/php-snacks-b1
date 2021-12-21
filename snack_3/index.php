<?php 
/*
1) Creare un array di array. 
2) Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
3) Stampare ogni data con i relativi post.
*/

$posts = [

  '10/01/2019' => [
      [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
      ],
      [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 2'
      ],
  ],
  '10/02/2019' => [
      [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 3'
      ]
  ],
  '15/05/2019' => [
      [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
      ],
      [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 5'
      ],
      [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
      ]
  ],
];

var_dump(array_keys($posts));

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
  <h1>Snack 3 </h1>
  <div>
    <?php foreach($posts as $key => $post){ ?>

    <h2> <?php echo $key ?> </h2>
    <ul>
      <?php foreach($post as $value){ ?>
      <li>
        <div> <?php echo $value['title'] ?> - <?php echo $value['author'] ?> </div>
        <p><?php echo $value['text'] ?></p>
      </li>
      <?php }?>
    </ul>

      <?php } ?>
  </div>
  
</body>
</html>