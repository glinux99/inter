<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../i_menu/header.php');?>
    <link rel="stylesheet" href="player/css/main.css">
    <title>Document</title>
</head>
<style>
  body{
    background: #ccc;
  }
  .bottom{
    position: absolute;
    bottom:0px;
    height:0.4rem;
    background: green;
    width: 100%;
    z-index: 1;
  }
  .volume{
    display: none;
  }
  .brodcast:hover .volume{
    cursor: pointer;
    display: block;
  }
</style>
<body>
<div class="container col-md-7">
  <div class="player-one" style="height:200px;"></div>
  <div class="player card-group col-6  bg-danger rounded">
    <div class="card brodcast p-0 position-relative">
        <div class="volume border-bottom border-1 border-white mt-2 mx-4">
j
        </div>
        <div class="time row px-2">
          <div class="text-start col-6">00:00:00</div>
           <div class="text-end col-6">00:00:00</div>
        </div>
      <div class="bottom p-0"></div>
    </div>
    <div class="card meta_data border-start border-2 border-white px-0">
      <div class="title h4">
        Titre ICI
      </div>
      <div class="date container">
        12.4.2029
      </div>
      <div class="card-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id eum temporibus, quaerat atque explicabo excepturi odit quo blanditiis ratione optio.
      </div>
      <div class="bottomg px-0"></div>
    </div>
  </div>
</div>
<script src="player/js/main.js"></script>
</body>
</html>