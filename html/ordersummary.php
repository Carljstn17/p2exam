<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css">
    <title>Document</title>
</head>
<body>
    <div class="header" id="fixed-header">
        <nav>
          <ul>
            <li class="name">CINEMAMOTO</li>
            <li class="right">
              <a href="index.html">Home</a>
              <a href="ordersummary.php">Movie</a>
            </li>
          </ul>
        </nav>
      </div>

    <center>
    <video width="620" height="440" controls class="cinema">
        <source src="cinema.mp4" type="video/mp4">
        <source src="cinema.ogg" type="video/ogg">
    </video>
    <center>

    <div class="container">
        <h1>Here's your purchase!</h1>
        <h2>Customer name:    <?php echo $_POST["cname"]; ?></h2>
        <h2>Gender:    <?php echo $_POST["gender"]; ?></h2>
        <h2>Age:    <?php echo $_POST["age"]; ?></h2>
        <h2>Address:    <?php echo $_POST["address"]; ?></h2>
        <h2>Cinema:    <?php echo $_POST["cinema"]; ?></h2>
        <h2>Ticket Number:    <?php echo $_POST["tnum"]; ?></h2>
        <h2>Add Ons:    <?php echo $_POST["add"]; ?></h2>
    </div>
</body>
</html>