<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>

<?php
if (!empty($_GET["phone"])) {
  echo "Your phone number is: " . $_GET["phone"];
}
?> <br>

<?php
if (!empty($_GET["phone"])) {
  echo "Your state of residence: " . $_GET["residence"];
}

?> <br>

</body>
</html>
