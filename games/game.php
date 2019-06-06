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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/jquery.terminal@1.x.x/js/jquery.terminal.min.js"></script>
  <link href="https://unpkg.com/jquery.terminal@1.x.x/css/jquery.terminal.min.css"/>

<?php include '../includes/nav.php';?>

  <div id="game-canvas"></div>

  <div id="terminal"></div>
  <script>
    $('#terminal').terminal("service.py", {
      greetings: "Start coding and having fun!"
   });
  </script>
  

<?php include '../includes/footer.php';?>