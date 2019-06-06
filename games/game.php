<?php 
  include '../includes/db.php';
  include '../includes/header.php';
?>
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="../css/home.css" rel="stylesheet" type="text/css">
  <link href="game.css" rel="stylesheet" type="text/css">
  <!-- js -->
  <script src="//cdn.jsdelivr.net/npm/phaser@3.16.2/dist/phaser.js"></script>
  <script src="StartScene.js"></script>
  <script src="game.js"></script>

<?php 
  include '../includes/nav.php';
?>

    <div id="game-canvas"></div>
  </body>
</html>