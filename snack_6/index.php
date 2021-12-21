<?php 

$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .grey, .green{
      float: left;
      padding: 10px;
      width: 50%;
    }
    ul{
      list-style: none;
    }
    .grey{
      background-color: grey;
    }
    .green{
      background-color: green;
    }
  </style>
</head>
<body>

<div class="grey">
  <h2>Teachers</h2>
  <ul>
    <?php foreach($db['teachers'] as $teacher){ ?>
    <li>
      <?php echo $teacher['name'] ?>
      <?php echo $teacher['lastname'] ?>
    </li>
    <?php } ?>
  </ul>
</div>

<div class="green">
  <h2>pm</h2>
  <ul>
    <?php foreach($db['pm'] as $singlepm){ ?>
    <li>
      <?php echo $singlepm['name'] ?>
      <?php echo $singlepm['lastname'] ?>
    </li>
    <?php } ?>
  </ul>
</div>

</body>
</html>