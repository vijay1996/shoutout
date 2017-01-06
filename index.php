<?php include 'database.php'; ?>
<?php
//Create select Query.
$query = "SELECT * FROM shouts";
$shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Expires" content="0">
  <title>ShoutOut!</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>

      <div id="container">
           <header>
                   <h1>Shout Box</h1>
           </header>

           <div id="shouts">
                <ul>
                    <?php
                       while($row = mysqli_fetch_assoc($shouts)) {
                          $array[] = $row;
                       }                        

                       $array = array_reverse($array, true);

                       foreach($array as $row):
                    ?>
                        <li class="shout"><span id="time"><?php echo $row['Time']; ?> - </span><span id="name"><?php echo $row['User']; ?>:</span> <?php echo $row['Message']; ?></li>
                    <?php endforeach; ?>
                </ul>
           </div>

           <div id="input" align="center">
                <form method="post" action="process.php">
                    <p><u>Note</u>: Both name and message fields should not be blank.</p>
                      Name: &nbsp;&nbsp;&nbsp;<input type="text" name="user" id="user" />
                      <br>
                      <br>
                      Message:<input type="text" name="message" id="message" />
                      <br>
                      <Br>
                      <input type="submit" value="Shout!" name="submit" class="shout_btn" />
                </form>
           </div>

      </div>
</body>
</html>
