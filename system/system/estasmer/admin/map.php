

<?php  unlink("map.xml"); ?>


<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Using MySQL and PHP with Google Maps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(31.1920015, 29.9209848),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://estasmer.com/admin/map.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lng')),
                  parseFloat(markerElem.getAttribute('lat')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzpfnhDBOqhtvw7K7ReXUyARcBEpfs0HE&callback=initMap">
    </script>
  </body>
</html>

























<!DOCTYPE html>
<html>
  <head>
 <?php  
 
   $localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="sales";

$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

}else{
	
	mysql_error();
}

 
    
$sql="SELECT * FROM `salestable` WHERE NOT lsite =' ';" ;
$q=mysql_query($sql) ;

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
$file=fopen('map.xml', 'a+');
$read=fread($file, 9000);


fwrite($file,'<?xml version="1.0"?>');
fwrite($file, "<markers>");



  while($row=mysql_fetch_array($q)){
   
    
    
   
      

fwrite($file,"<marker lat= ' $row[lsite]'  lng='$row[fsite]'/>");





}
     
fwrite($file, "</markers>");



        
  
 
  ?>

          
          
          
          
          
          
          
          
          
          
          
          
          
  </body>
</html>