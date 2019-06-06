<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/nav.php';
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5" style="left: 30%; position: relative">
    <div class="heading-banner" >
      <h1 class="display-4 font-weight-normal">Build Your Own Game</h1>
      <p class="lead font-weight-normal">Learn computer programming the fun way! Kids Learning Code is a game-based computer science program where kids type real code and see their characters react in real time.</p>
      <a class="btn btn-outline-secondary" href="#game-container">Play and Learn Now</a>
    </div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" id="game-container">
  <?php
    $query = "SELECT * FROM games";
    $select_all_games_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_all_games_query)){
  ?>
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5"><a class="to-game-page" href="games/game.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></h2>
        <p class="lead"><?php echo $row['description'];?></p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="game-screenshot" src="<?php echo $row['img_url'];?>">
      </div>
    </div>
  <?php
    }
  ?>
</div>


<?php include 'includes/footer.php';?>