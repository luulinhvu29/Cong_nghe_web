<?php require_once('connection/config.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo APP_NAME; ?>:Contacts</title>
<script type="text/javascript" src="swf/swfobject.js"></script>
<link href="stylesheets/user_styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="page">
  <div id="menu"><ul>
  <li><a href="member-index.php">Home</a></li>
  <li><a href="foodzone.php">Food Zone</a></li>
  <li><a href="specialdeals.php">Special Deals</a></li>
  <li><a href="member-index.php">My Account</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  </ul>
  </div>
<div id="header">
  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
  <div id="company_name"><?php echo APP_NAME; ?> Restaurant</div>
</div>
<div id="center">

  <h1>Contact Us</h1>
  
  <div style="border:#bd6f2f solid 1px;padding:4px 6px 6px 6px">
  <table width="800" height="50">
  <tr><td rowspan="11"><img width="600" height="400" src="images/map.jpg" /></td></tr>
  <tr><td rowspan="11"></td></tr>
  <tr><td><?php echo APP_NAME ?> Restaurant</td></tr>
  <tr><td>P.O. Box: 45640-00100</td></tr>
  <tr><td>Address: 291 LNLV Road, LNLV District, Ho Chi Minh City</td></tr>
  <tr><td>Landline: +014553456</td></tr>
  <tr><td>Mobile: +84907104902/+84965553574</td></tr>
  <tr><td>Email: vuB1910179@student.ctu.edu.vn</td></tr>
  </table>
  </div>
</div>
<?php include 'footer.php'; ?>
</div>

</body>
</html>
