<?php 

$paraghraph = '  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel dolorum, inventore accusantium a deserunt eos, veritatis minima dicta nostrum eius aperiam porro natus iste. Sint consectetur asperiores molestias ut nam mollitia repellendus facere ab pariatur nihil placeat necessitatibus quas recusandae in, laudantium veritatis autem, accusamus quae nostrum ea modi iure libero officiis labore. Vero, eaque numquam ipsum aut dolor quod officia enim reprehenderit minima incidunt placeat delectus veritatis animi quos impedit velit aperiam id vel eveniet explicabo? Beatae esse ex animi ab minus reiciendis mollitia aperiam qui sapiente voluptatibus! Libero dignissimos dolorum architecto deserunt, distinctio consequuntur animi numquam id quas ab repellat laboriosam temporibus praesentium dolore fuga facere quae assumenda corporis natus explicabo velit molestias consequatur error saepe. Sapiente facere obcaecati iure minima, accusamus laudantium ipsa blanditiis libero deserunt recusandae, doloribus quis repellendus ex dolorem. Est ea reiciendis atque unde dicta enim. Unde tenetur iusto est sunt? Minima voluptate dolorum voluptatibus magni dolore possimus saepe libero amet. Ex aspernatur velit magni dolorem quos accusantium. Tenetur eveniet voluptatibus repellat modi veniam ipsam suscipit neque. Doloremque quisquam ipsa inventore ut tempore dolor quidem sapiente fuga itaque optio nobis mollitia magnam expedita, eius, laudantium sit quibusdam, quis deserunt ullam error modi qui explicabo.';

$paraghraphSplit = explode('.', $paraghraph, -1);

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
  <h1>Single paragraph:</h1>
  <p><?php echo $paraghraph ?></p>

  <ul>
  <?php foreach($paraghraphSplit as $singleParagraph){ ?>
    
    
    <li> <?php echo $singleParagraph ?>. </li>
   

  <?php } ?>
  </ul>
</body>
</html>