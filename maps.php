<!Doctype html>
<html>
<head>
    <title></title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #map{
            height: 500px;
            width: 100%;
        }
    
    </style>
    <div id="user-menu">
                   <a href ="home.php">
                <button class="btnspa">Return Back</button>
                       </a>
                
                </div>
    
    </head>
    <body>
    
    <div id = "map"></div>
    
        <script>
        function initMap() {
            var location = {lat: 19.047321, lng: 73.069908};
            var map = new google.maps.Map(document.getElementById("map"),{
                zoom: 4,
                center: location
            });
            
        }
        
        
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz6J5IrWL5XHpMGsLXgof_JhLcDUMVtXA&callback=initMap"></script>
        
    </body>
</html>