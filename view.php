<?php
require_once("db.php");
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<html>
<head>
<title>Antistereotip - Pregled stranice</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{width:1280px;font-family:arial;letter-spacing:1px;line-height:20px;margin: 0 auto;}
.button_link {color:#FFF;text-decoration:none; background-color:#6b96b5;padding:10px;}
.frm-add {border: #c3bebe 1px solid;
    padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 100;}	
.demo-form-row{margin-top:20px;}
.demo-form-field{width:300px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>
<link rel="shortcut icon" type="image/png" href="logo.png"/>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Back On The Track</a></div>
<div class="frm-add">
<button onclick="window.print()">Odštampaj stranicu</button>
<form>
  <div class="demo-form-row">
	  <b>Naslov:</b> <?php echo $result[0]['post_title']; ?>
  </div>
  <div class="demo-form-row">
	  <b>Ukratko:</b> <?php echo $result[0]['sum']; ?>
  </div>
  <div class="demo-form-row">
	  <b>Opis:</b> <?php echo $result[0]['description']; ?>
  </div>
  <div class="demo-form-row">
	  <b>Slika:</b> <img src="<?php echo $result[0]['img']; ?>" width="200"/>
  </div>
  <div class="demo-form-row">
	  <b>Link:</b> <a href="<?php echo $result[0]['link']; ?>"><?php echo $result[0]['link']; ?></a>
  </div>
  <div class="demo-form-row">
	  <b>Datum objave:</b> <?php echo $result[0]['post_at']; ?>
  </div>
  </form>
</div>
</body>
</html>
