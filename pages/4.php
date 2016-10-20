<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href=$_SERVER['DOCUMENT_ROOT']."/style.css"> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
 $(function () {       
            google.maps.visualRefresh = true;
            var center = new google.maps.LatLng(49.218991, 28.429188);
            var mapOptions = {
                zoom:17,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            var myLatlng = new google.maps.LatLng(49.218991, 28.429188);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Vinnytsia'
            });           
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
      
        });
</script>       
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/Site/elements/head.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/Site/elements/form_input.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/Site/elements/nav_menu.php');?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/Site/elements/google_map.php');?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/Site/elements/footer.php'); ?>
</body>
</html>
