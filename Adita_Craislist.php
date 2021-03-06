<!DOCTYPE html">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <title>Craigsist</title>
    <style>
      html {
        background: url('1.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      .header{
        width:100%;
        height:100px;
        font: 100 50px 'Arizonia', Helvetica, sans-serif;
        color: #2b2b2b;
        text-shadow: 4px 4px 0px rgba(0,0,0,0.1);
      }
      .header input[type=text] {
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 13px;
        background-color: white;
        background-image:'searchicon.png';
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
        }
        .TitleBar input[type=text]:focus {
            width: 280px;
        }
        .calender aside{
          width:20%;
          height:200px;
          float:left;
          margin: 10px;
        }

      #map {
        height: 500px;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }

      #calender{
        float:left;
      }

      table {
          -webkit-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -moz-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -ms-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -o-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          border-spacing: 0;
          margin: 2em auto;
          position: relative;
          width: 239px;
      }

      table:before {
          -webkit-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -moz-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -ms-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -o-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          position: absolute;
          top: 0px;
          left: 2px;
          background: #ffffff;
          content: " ";
          display: block;
          height: 230px;
          width: 236px;
          z-index: -1;
      }

      table:after {
          -webkit-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -moz-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -ms-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          -o-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3);
          position: absolute;
          top: 2px;
          left: 4px;
          background: #ffffff;
          content: " ";
          display: block;
          height: 230px;
          width: 232px;
          z-index: -2;
      }

      table thead th {
          -webkit-border-radius: 1px;
          -moz-border-radius: 1px;
          -ms-border-radius: 1px;
          -o-border-radius: 1px;
          border-radius: 1px;
          -webkit-box-shadow: inset 0 1px 0 0 #e88486;
          -moz-box-shadow: inset 0 1px 0 0 #e88486;
          -ms-box-shadow: inset 0 1px 0 0 #e88486;
          -o-box-shadow: inset 0 1px 0 0 #e88486;
          box-shadow: inset 0 1px 0 0 #e88486;
          background-color: #e56568;
          background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #e56568), color-stop(100%, #bd3f41));
          background-image: -webkit-linear-gradient(top, #e56568, #bd3f41);
          background-image: -moz-linear-gradient(top, #e56568, #bd3f41);
          background-image: -ms-linear-gradient(top, #e56568, #bd3f41);
          background-image: -o-linear-gradient(top, #e56568, #bd3f41);
          background-image: linear-gradient(top, #e56568, #bd3f41);
          border-bottom: 1px solid #ac2826;
          border-top: 1px solid #ac2826;
          color: white;
          font-size: 13pt;
          font-weight: bold;
          padding: 8px 0;
          text-align: center;
          text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
      }

      table thead th.arrow:first-child {
          border-left: 1px solid #ac2826;
          text-align: right;
      }

      table thead th.arrow:last-child {
          border-right: 1px solid #ac2826;
          text-align: left;
      }

      table thead th.arrow a {
          color: white;
          font-family: 'MS Gothic';
      }

      table thead th.arrow a:hover { color: #333333 }

      table tbody th {
          -webkit-box-shadow: inset 0 1px 0 0 white;
          -moz-box-shadow: inset 0 1px 0 0 white;
          -ms-box-shadow: inset 0 1px 0 0 white;
          -o-box-shadow: inset 0 1px 0 0 white;
          box-shadow: inset 0 1px 0 0 white;
          background-color: #f5f5f5;
          background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #e8e8e8));
          background-image: -webkit-linear-gradient(top, #f5f5f5, #e8e8e8);
          background-image: -moz-linear-gradient(top, #f5f5f5, #e8e8e8);
          background-image: -ms-linear-gradient(top, #f5f5f5, #e8e8e8);
          background-image: -o-linear-gradient(top, #f5f5f5, #e8e8e8);
          background-image: linear-gradient(top, #f5f5f5, #e8e8e8);
          border-bottom: 1px solid #d4d4d4;
          color: #666666;
          font-size: 7.5pt;
          font-weight: normal;
          padding: 4px 0;
          text-align: center;
          text-shadow: 0 1px 0 #ffffff;
          text-transform: uppercase;
          width: 34px;
      }

      table tbody th:first-child { border-left: 1px solid #abb6bf }

      table tbody th:last-child { border-right: 1px solid #abb6bf }

      table tbody td {
          background-color: #fcfdfd;
          border-bottom: 1px solid #e2e2e2;
          border-left: 1px solid #e2e2e2;
          color: #444444;
          font-size: 11pt;
          font-weight: bold;
          height: 27px !important;
          padding: 0;
          text-align: center;
          width: 34px;
      }

      table tbody td.today {
          background-color: #f5f5f5;
          background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #e8e8e8));
          background-image: -webkit-linear-gradient(top, #f5f5f5, #e8e8e8);
          background-image: -moz-linear-gradient(top, #f5f5f5, #e8e8e8);
          background-image: -ms-linear-gradient(top, #f5f5f5, #e8e8e8);
          background-image: -o-linear-gradient(top, #f5f5f5, #e8e8e8);
          background-image: linear-gradient(top, #f5f5f5, #e8e8e8);
          border-left: 1px solid #c4c4c2;
          border-bottom: 1px solid #c4c4c2;
      }

      table tbody td.last-week { border-bottom: 1px solid #c4c4c2 }

      table tbody td.tomorrow { border-left: 1px solid #c4c4c2 }

      table tbody td.off { color: #d8dbde }

      table tbody td:last-child { border-right: 1px solid #abb6bf }

      table tbody td:first-child { border-left: 1px solid #abb6bf }

      table tbody td:not(:last-child) {
          -webkit-box-shadow: inset -1px 0 0 0 #eeefef;
          -moz-box-shadow: inset -1px 0 0 0 #eeefef;
          -ms-box-shadow: inset -1px 0 0 0 #eeefef;
          -o-box-shadow: inset -1px 0 0 0 #eeefef;
          box-shadow: inset -1px 0 0 0 #eeefef;
      }

      table tbody td:not(:last-child).today {
          -webkit-box-shadow: inset -1px 0 0 0 #d8d8d7;
          -moz-box-shadow: inset -1px 0 0 0 #d8d8d7;
          -ms-box-shadow: inset -1px 0 0 0 #d8d8d7;
          -o-box-shadow: inset -1px 0 0 0 #d8d8d7;
          box-shadow: inset -1px 0 0 0 #d8d8d7;
      }

      table tbody td.event { position: relative }

      table tbody td.event:after {
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          -ms-border-radius: 5px;
          -o-border-radius: 5px;
          border-radius: 5px;
          -webkit-box-shadow: inset 0 1px 0 0 #e88486;
          -moz-box-shadow: inset 0 1px 0 0 #e88486;
          -ms-box-shadow: inset 0 1px 0 0 #e88486;
          -o-box-shadow: inset 0 1px 0 0 #e88486;
          box-shadow: inset 0 1px 0 0 #e88486;
          background-color: #e56568;
          background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #e56568), color-stop(100%, #bd3f41));
          background-image: -webkit-linear-gradient(top, #e56568, #bd3f41);
          background-image: -moz-linear-gradient(top, #e56568, #bd3f41);
          background-image: -ms-linear-gradient(top, #e56568, #bd3f41);
          background-image: -o-linear-gradient(top, #e56568, #bd3f41);
          background-image: linear-gradient(top, #e56568, #bd3f41);
          position: absolute;
          right: 2px;
          bottom: 2px;
          border: 1px solid #ac2826;
          content: " ";
          display: block;
          height: 4px;
          width: 4px;
      }
    </style>
    <script>
    function change(id){
      if(id==4){
        document.getElementById("Map_Page").className="show";
        document.getElementById("Home_Page").className="hide";
      }
      if(id==1){
        document.getElementById("Map_Page").className="hide";
        document.getElementById("Home_Page").className="show";
      }

    }
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 23.725011735951796, lng: 78.486328125},
        zoom: 3
      });
      var card = document.getElementById('pac-card');
      var input = document.getElementById('pac-input');

      map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

      var autocomplete = new google.maps.places.Autocomplete(input);

      var infowindow = new google.maps.InfoWindow();
      var infowindowContent = document.getElementById('infowindow-content');
      infowindow.setContent(infowindowContent);
      var marker = new google.maps.Marker({map: map,anchorPoint: new google.maps.Point(0, -29)});

      autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
          // User entered the name of a Place that was not suggested and
          // pressed the Enter key, or the Place Details request failed.
          window.alert("No details available for input: '" + place.name + "'");
          return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
          address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
          ].join(' ');
        }
        infowindowContent.children['place-icon'].src = place.icon;
        infowindowContent.children['place-name'].textContent = place.name;
        infowindowContent.children['place-address'].textContent = address;
        infowindow.open(map, marker);

      });


      google.maps.event.addListener(map, 'click', function(event) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
          'latLng': event.latLng
        }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            if (results[0]) {
              for (var i=0; i < results[0].address_components.length; i++) {
                for (var j=0; j < results[0].address_components[i].types.length; j++) {
                  if (results[0].address_components[i].types[j] == "country") {
                    country = results[0].address_components[i];
                    document.getElementById("country").innerText="Craigslist "+country.long_name;
                    document.getElementById("heading").innerText=country.long_name;
                    document.getElementById("1").innerText= country.long_name+" "+document.getElementById("q").innerText
                    document.getElementById("2").innerText= country.long_name+" "+document.getElementById("w").innerText
                    document.getElementById("3").innerText= country.long_name+" "+document.getElementById("e").innerText
                    document.getElementById("4").innerText= country.long_name+" "+document.getElementById("r").innerText
                    document.getElementById("5").innerText= country.long_name+" "+document.getElementById("t").innerText
                    document.getElementById("6").innerText= country.long_name+" "+document.getElementById("y").innerText

                  }
                }
              }

            }
          }
        });
      });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdJt9rVEBRkimFmb2hFhAlRg_Abn-xMQk&libraries=places&callback=initMap"async defer></script>
  </head>
  <body>
    <div style="float:left">
    <?php include 'connect.php';?>
    <?php
      $query="Select * from links where id = 1";
      $result=mysqli_query($conn,$query);
      $data=mysqli_fetch_assoc($result);
      $link=$data['text'];
    ?>
    <p id="q" style="color:white;"><?php echo $link?></p>

    <?php
      $query="Select * from links where id = 2";
      $result=mysqli_query($conn,$query);
      $data=mysqli_fetch_assoc($result);
      $link=$data['text'];
    ?>
    <p id="w" style="color:white;"><?php echo $link?></p>

    <?php
      $query="Select * from links where id = 3";
      $result=mysqli_query($conn,$query);
      $data=mysqli_fetch_assoc($result);
      $link=$data['text'];
    ?>
    <p id="e" style="color:white;"><?php echo $link?></p>

    <?php
      $query="Select * from links where id = 4";
      $result=mysqli_query($conn,$query);
      $data=mysqli_fetch_assoc($result);
      $link=$data['text'];
    ?>
    <p id="r" style="color:white;"><?php echo $link?></p>

    <?php
      $query="Select * from links where id = 5";
      $result=mysqli_query($conn,$query);
      $data=mysqli_fetch_assoc($result);
      $link=$data['text'];
    ?>
    <p id="t" style="color:white;"><?php echo $link?></p>

    <?php
      $query="Select * from links where id = 6";
      $result=mysqli_query($conn,$query);
      $data=mysqli_fetch_assoc($result);
      $link=$data['text'];
    ?>
    <p id="y" style="color:white;"><?php echo $link?></p>
  </div>
  <div>
    <div class="header">
      <center>
        <h2 style="color:#034f84;"id="country">Craigslist Earth</h2>
      <center>
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
    <div id="calender" style="margin-top:100px;">
      <table>
        <thead>
          <tr>
            <th class="arrow"><a href="">◀</a></th>
            <th colspan="5">
              October 2011
            </th>
            <th class="arrow"><a href="">▶</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
            <th>Sun</th>
          </tr>
          <tr>
            <td class="off">26</td>
            <td class="off">27</td>
            <td class="off">28</td>
            <td class="off">29</td>
            <td class="off">30</td>
            <td>1</td>
            <td>2</td>
          </tr>
          <tr>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
          </tr>
          <tr>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
          </tr>
          <tr>
            <td>17</td>
            <td class="last-week">18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
          </tr>
          <tr>
            <td>24</td>
            <td class="today">25</td>
            <td class="tomorrow">26</td>
            <td>27</td>
            <td class="event">28</td>
            <td>29</td>
            <td>30</td>
          </tr>
          <tr>
            <td>31</td>
            <td class="off">1</td>
            <td class="off">2</td>
            <td class="off">3</td>
            <td class="off">4</td>
            <td class="off">5</td>
            <td class="off">6</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="width:100%; height:30px; background:#d3d3d3; margin-top:30px;">
      <center>
        <div style="width:30%; height:30px;">
          <center>
        <span><h2 id="heading" style="color:#034f84;">Earth</h2></span>
      </center>
      </div>
      </center>
    </div>

  <div style="width:80%; height:300px; margin-left:20%; margin-top:3%;">
    <div style="width:23%; height:300px; margin-left:6%; position:relative;float:right; border: 1px solid black; margin-right:30px;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h1" style="color:#034f84;">Community</h2></span>
        </center>
        </div>
        </center>
      </div>

      <ul style="list-style-type:circle">
        <li><a href="" id="1">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="" id="2">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="" id="3">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="" id="4">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="" id="5">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="" id="6">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
    <div style="width:23%; height:300px; margin-left:6%; position:relative;float:right; border: 1px solid black;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h2" style="color:#034f84;">Housing</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
    <div style="width:23%; height:300px; margin-left:6%; position:relative;float:right; border: 1px solid black;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h3" style="color:#034f84;">Jobs</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
  </div>

  <div style="width:80%; height:300px; margin-left:20%; margin-top:3%;">
    <div style="width:45%; height:300px; position:relative;float:right; border: 1px solid black; margin-right:30px;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h4" style="color:#034f84;">Personals</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
    <div style="width:45%; height:300px; margin-right:80px;position:relative;float:right; border: 1px solid black;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h5" style="color:#034f84;">For Sale</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
  </div>

  <div style="width:80%; height:300px; margin-left:20%; margin-top:3%;">
    <div style="width:45%; height:300px; position:relative;float:right; border: 1px solid black; margin-right:30px;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h6" style="color:#034f84;">Discussions</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
    <div style="width:45%; height:300px; margin-right:80px; position:relative;float:right; border: 1px solid black;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h7" style="color:#034f84;">Services</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
  </div>

  <div style="width:80%; height:300px; margin-left:20%; margin-top:3%;">
    <div style="width:23%; height:300px; margin-left:6%; position:relative;float:right; border: 1px solid black; margin-right:30px;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h8" style="color:#034f84;">Gigs</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
    <div style="width:23%; height:300px; margin-left:6%; position:relative;float:right; border: 1px solid black;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h9" style="color:#034f84;">Resumes</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
    <div style="width:23%; height:300px; margin-left:6%; position:relative;float:right; border: 1px solid black;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h10" style="color:#034f84;">Legal</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
  </div>

  <div style="width:80%; height:300px; margin-left:20%; margin-top:3%;">
    <div style="width:45%; height:300px; position:relative;float:right;border: 1px solid black; margin-right:30px;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h11" style="color:#034f84;">Stocks</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
    <div style="width:45%; height:300px; margin-right:80px; position:relative;float:right; border: 1px solid black;">
      <div style="width:100%; height:30px; background:#d3d3d3;">
        <center>
          <div style="width:30%; height:30px;">
            <center>
          <span><h2 id="h12" style="color:#034f84;">Scams</h2></span>
        </center>
        </div>
        </center>
      </div>
      <ul style="list-style-type:circle">
        <li><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
        <li style="margin-top:10px;"><a href="">Live Chat for The Baking Room</a></li>
      </ul>
    </div>
  </div>
  </body>
</html>
