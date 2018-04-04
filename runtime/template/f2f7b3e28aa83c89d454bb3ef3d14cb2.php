<?php /*a:5:{s:81:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\index\go_trip.html";i:1522835035;s:79:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\base.html";i:1522821598;s:80:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\toper.html";i:1522822083;s:81:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\header.html";i:1522820695;s:81:"D:\phpStudy\PHPTutorial\WWW\childHealth\application/index/view\layout\footer.html";i:1522815622;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
<title><?php echo htmlentities($site_info['site_title']); ?></title>
<meta content="<?php echo htmlentities($site_info['site_keyword']); ?>" name="keywords"/>
<meta content="<?php echo htmlentities($site_info['site_description']); ?>" name="description"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<link href="/assets/css/amazeui.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="/assets/css/base.css" rel="stylesheet">

    
<link href="/assets/css/trip.css" rel="stylesheet">

</head>


<body>

<header class="am-topbar am-topbar-fixed-top header_css"  >
    <div class="am-container" >
        <h1 class="am-topbar-brand">
            <a href="/">LOGO</a>
        </h1>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span><span
                class="am-icon-bars"></span></button>
        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav am-fr">
                <li style="margin: 10px;" <?php if($action == 'index'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo url('/'); ?>" ><i class="am-icon-home am-icon-sm"></i> Home</a>
                </li>
                <li <?php if($action == 'health'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['health_url']); ?>" > <i class="am-icon-heartbeat am-icon-sm"></i> Health</a>
                </li>
                <li <?php if($action == 'go_trip'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['go_trip_url']); ?>"><i class="am-icon-cab am-icon-sm"></i> Trip</a>
                </li>

                <?php   if($user_id == 0){?>
                <li <?php if($action == 'login'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['login_url']); ?>" target="new"  ><i class="am-icon-sign-in am-icon-sm"></i> Login</a>
                </li>
                <li <?php if($action == 'reg'): ?> class="am-active" <?php endif; ?> >
                    <a href="<?php echo htmlentities($site_info['reg_url']); ?>" target="new"   ><i class="am-icon-flag am-icon-sm"></i> Regist</a>
                </li>
                <?php }else{ ?>
                <li <?php if($action == 'user'): ?> class="am-active" <?php endif; ?>> <a href="<?php echo url('/user/'.$user_id); ?>" target="new"  > Welcome <?php echo $user_info['user_name']; ?> </a></li>
                <li ><a href="<?php echo htmlentities($site_info['logout_url']); ?>"   ><i class="am-icon-sign-out am-icon-sm"></i> Logout</a> </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header>



<div class="detail">
    <div class="am-g am-g-fixed detail_bg" >
            <div class="map_l" style="width: 70%;position:relative;">
            <div id="map" style="width: 100%; height: 648px" ></div>


            <div class="am-form-group am-form-icon" style="position:absolute; z-index:99999999; left:10px; top:10px">
                 <i class="am-icon-search"></i>
                 <input  id="autocomplete" type="text" class="am-form-field" placeholder="Enter a keyword">
            </div>

            </div>
            <div class="map_r" style="width: 30%">
                 <div style="padding: 0 15px;">
                      <div class="am-form-group">
                          <label for="doc-ipt-3" class="am-form-label" style="">Park Information:</label>
                      </div>
                      <div id="listing">
                           <table id="resultsTable">
                                <tbody id="results"></tbody>
                           </table>
                      </div>
                      <div id="controls" style="display: none">
                            <select id="country">
                                    <option value="all">All</option>
                                    <option value="au" selected>Australia</option>
                                    <option value="br">Brazil</option>
                                    <option value="ca">Canada</option>
                                    <option value="fr">France</option>
                                    <option value="de">Germany</option>
                                    <option value="mx">Mexico</option>
                                    <option value="nz">New Zealand</option>
                                    <option value="it">Italy</option>
                                    <option value="za">South Africa</option>
                                    <option value="es">Spain</option>
                                    <option value="pt">Portugal</option>
                                    <option value="us" >U.S.A.</option>
                                    <option value="uk">United Kingdom</option>
                                </select>
                      </div>


                 </div>
                      <div class="time_weather">
                          <table class="am-table am-table-bordered am-table-radius am-table-striped" style="margin-bottom:0px;">
                          <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Weather</th>
                                </tr>
                          </thead>
                          <tbody>
                          <tr>
                                <td>13.00-14.00</td>
                                <td>Sunny</td>
                          </tr>
                          <tr>
                                <td>13.00-14.00</td>
                                <td>Sunny</td>
                           </tr>
                            <tr>
                                <td>13.00-14.00</td>
                                <td>Sunny</td>
                           </tr>
                            <tr>
                                <td>13.00-14.00</td>
                                <td>Sunny</td>
                           </tr>
                          </tbody>
                          </table>
                      </div>

            </div>
            <div style="clear: both"></div>
    </div>
</div>



<div style="display: none">
    <div id="info-content">
        <table>
            <tr id="iw-url-row" class="iw_table_row">
                <td id="iw-icon" class="iw_table_icon"></td>
                <td id="iw-url"></td>
            </tr>
            <tr id="iw-name-row" class="iw_table_row">
                <td class="iw_attribute_name">Place:</td>
                <td id="iw-name"></td>
            </tr>
            <tr id="iw-description-row" class="iw_table_row">
                <td class="iw_attribute_name">Description:</td>
                <td id="iw-description"></td>
            </tr>
            <tr id="iw-go-row" class="iw_table_row">
                <td class="iw_attribute_go"><input type="button" value="Comfirm" id="go_this_place"/> :</td>
                <td id="iw-go"></td>
            </tr>
        </table>
    </div>
</div>




<footer class="footer">
    <p>
        Copyright © Your Website 2018
    </p>
</footer>


<script type="text/javascript" src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.ie8polyfill.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/layer/layer.js"></script>
<script type="text/javascript" src="/assets/js/action.js"></script>
<script type="text/javascript" src="/assets/js/common.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>

</body>


<script>
    // This example uses the autocomplete feature of the Google Places API.
    // It allows the user to find all hotels in a given place, within a given
    // country. It then displays markers for all the hotels returned,
    // with on-click details for each hotel.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var map, places, infoWindow;
    var markers = [];
    var autocomplete;
    var countryRestrict = {'country': 'au'};
    var MARKER_PATH = 'https://developers.google.com/maps/documentation/javascript/images/marker_green';
    var hostnameRegexp = new RegExp('^https?://.+?/');

    var countries = {
        'au': {
            center: {lat: -25.3, lng: 133.8},
            zoom: 4
        },
        'br': {
            center: {lat: -14.2, lng: -51.9},
            zoom: 3
        },
        'ca': {
            center: {lat: 62, lng: -110.0},
            zoom: 3
        },
        'fr': {
            center: {lat: 46.2, lng: 2.2},
            zoom: 5
        },
        'de': {
            center: {lat: 51.2, lng: 10.4},
            zoom: 5
        },
        'mx': {
            center: {lat: 23.6, lng: -102.5},
            zoom: 4
        },
        'nz': {
            center: {lat: -40.9, lng: 174.9},
            zoom: 5
        },
        'it': {
            center: {lat: 41.9, lng: 12.6},
            zoom: 5
        },
        'za': {
            center: {lat: -30.6, lng: 22.9},
            zoom: 5
        },
        'es': {
            center: {lat: 40.5, lng: -3.7},
            zoom: 5
        },
        'pt': {
            center: {lat: 39.4, lng: -8.2},
            zoom: 6
        },
        'us': {
            center: {lat: 37.1, lng: -95.7},
            zoom: 3
        },
        'uk': {
            center: {lat: 54.8, lng: -4.6},
            zoom: 5
        }
    };

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: countries['au'].zoom,
            center: countries['au'].center,
            mapTypeControl: false,
            panControl: false,
            zoomControl: false,
            streetViewControl: false
        });

        infoWindow = new google.maps.InfoWindow({
            content: document.getElementById('info-content')
        });

        // Create the autocomplete object and associate it with the UI input control.
        // Restrict the search to the default country, and to place type "cities".
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */ (
                document.getElementById('autocomplete')), {
                types: ['(cities)'],
                componentRestrictions: countryRestrict
            });
        places = new google.maps.places.PlacesService(map);

        autocomplete.addListener('place_changed', onPlaceChanged);

        // Add a DOM event listener to react when the user selects a country.
        document.getElementById('country').addEventListener(
            'change', setAutocompleteCountry);
    }

    // When the user selects a city, get the place details for the city and
    // zoom the map in on the city.
    function onPlaceChanged() {
        var place = autocomplete.getPlace();
        if (place.geometry) {
            map.panTo(place.geometry.location);
            map.setZoom(15);
            search();
        } else {
            document.getElementById('autocomplete').placeholder = 'Enter a city';
        }
    }

    // Search for hotels in the selected city, within the viewport of the map.
    function search() {
        var search = {
            bounds: map.getBounds(),
            types: ['lodging']
        };



        places.nearbySearch(search, function(results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                clearResults();
                clearMarkers();
                // Create a marker for each hotel found, and
                // assign a letter of the alphabetic to each marker icon.
                for (var i = 0; i < results.length; i++) {
                    (function(j) {
                        $.post("<?php echo url('index/index/getWeather'); ?>",{keyword:results[i].vicinity,lang:'ar',num:i},function(result){
                            // $("span").html(result);result
                            // var x = i;

                            var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (j % 26));
                            // var markerIcon = MARKER_PATH + markerLetter + '.png';
                            var markerIcon =  result.data.image;
                            // Use marker animation to drop the icons incrementally on the map.
                            markers[j] = new google.maps.Marker({
                                position: results[j].geometry.location,
                                animation: google.maps.Animation.DROP,
                                icon: markerIcon
                            });

                            // If the user clicks a hotel marker, show the details of that hotel
                            // in an info window.
                            markers[j].placeResult = results[j];
                            markers[j].weatherinfo = 12;

                            google.maps.event.addListener(markers[j], 'click', showInfoWindow);
                            setTimeout(dropMarker(j), j * 100);
                            console.log(markers[j]);
                            addResult(results[j], j ,markerIcon);
                        });
                    })(i);
                }
            }
        });
    }

    function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
            if (markers[i]) {
                markers[i].setMap(null);
            }
        }
        markers = [];
    }

    // Set the country restriction based on user input.
    // Also center and zoom the map on the given country.
    function setAutocompleteCountry() {
        var country = document.getElementById('country').value;
        if (country == 'all') {
            autocomplete.setComponentRestrictions([]);
            map.setCenter({lat: 15, lng: 0});
            map.setZoom(2);
        } else {
            autocomplete.setComponentRestrictions({'country': country});
            map.setCenter(countries[country].center);
            map.setZoom(countries[country].zoom);
        }
        clearResults();
        clearMarkers();
    }

    function dropMarker(i) {
        return function() {
            markers[i].setMap(map);
        };
    }

    function addResult(result, i ,markerIcon) {
        console.log("===");
        console.log(result);
        console.log("===");

        var results = document.getElementById('results');
        var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (i % 26));
        // var markerIcon = MARKER_PATH + markerLetter + '.png';
        // var markerIcon = MARKER_PATH + markerLetter + '.png';

        var tr = document.createElement('tr');
        tr.style.backgroundColor = (i % 2 === 0 ? '#F0F0F0' : '#FFFFFF');
        tr.onclick = function() {
            google.maps.event.trigger(markers[i], 'click');
        };

        var iconTd = document.createElement('td');
        var nameTd = document.createElement('td');
        var icon = document.createElement('img');
        icon.src = markerIcon;
        icon.setAttribute('class', 'placeIcon');
        icon.setAttribute('className', 'placeIcon');
        var name = document.createTextNode(result.name);
        iconTd.appendChild(icon);
        nameTd.appendChild(name);
        tr.appendChild(iconTd);
        tr.appendChild(nameTd);
        results.appendChild(tr);
    }

    function clearResults() {
        var results = document.getElementById('results');
        while (results.childNodes[0]) {
            results.removeChild(results.childNodes[0]);
        }
    }

    // Get the place details for a hotel. Show the information in an info window,
    // anchored on the marker for the hotel that the user selected.
    function showInfoWindow() {
        var marker = this;
        console.log(marker);
        places.getDetails({placeId: marker.placeResult.place_id},
            function(place, status) {
                if (status !== google.maps.places.PlacesServiceStatus.OK) {
                    return;
                }
                infoWindow.open(map, marker);
                buildIWContent(place);
            });
    }

    // Load the place information into the HTML elements used by the info window.
    function buildIWContent(place) {
        $.post("<?php echo url('index/index/getWeather'); ?>",{keyword:place.vicinity,lang:'ar',num:1},function(result){
            document.getElementById('iw-icon').innerHTML = '<img class="hotelIcon" ' +
                'src="' + result.data.image + '"/>';
            document.getElementById('iw-name').textContent = result.data.name;
            document.getElementById('iw-description').textContent = result.data.description;
        });
        console.log(place);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1a6pBb8VCtQ80jZcPOoaDvEFZ8VXD-s&libraries=places&callback=initMap" async defer></script>

</html>