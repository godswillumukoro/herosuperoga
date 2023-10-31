// Gombe State
function InitMap() {
    map = new google.maps.Map(document.getElementById('gombe-map'), {
        center: {lat: 11.412782, lng: 10.192585},
        zoom: 8,
        mapId: '116c04d903f08d87'
      });

      // Name
      // Latitude, Longitude
      // Image URL
      // scaledSize width, height
      const markers = [
        [
          "LIMAN ABDULLAHI",
          11.412782,
          10.192585,
          './map-img/logo.png',
          57,
          46
        ],
        [
          "ABDULLAHI BILAL",
          10.773367,
          10.294895,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "SHUAIBU ALIYU",
          10.680565, 
          11.884780,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "USMAN ABUBAKAR",
          10.317267, 
          11.355002,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "SANI RABIU",
          10.293533,
          11.340500,
          './map-img/logo.png',
          57,
          46
        ],
      ];

      for(let i=0; i<markers.length; i++){
        const currMarker = markers[i];
        const marker = new google.maps.Marker({
          animation: google.maps.Animation.DROP,
          position: {lat: currMarker[1], lng: currMarker[2]},
          map,
          title: currMarker[0],
          icon: {
            url: currMarker[3],
            scaledSize: new google.maps.Size(currMarker[4],currMarker[5]),
          }
        });
  
        const infowindow = new google.maps.InfoWindow({
          content: currMarker[0],
        });
  
        marker.addListener("click", () => {
          infowindow.open(map,marker);
        });
      }

}
function oyoInitMap() {
    map = new google.maps.Map(document.getElementById('oyo-map'), {
        center: {lat: 7.656080, lng: 4.188705},
        zoom: 8,
        mapId: '116c04d903f08d87'
      });

      // Name
      // Latitude, Longitude
      // Image URL
      // scaledSize width, height
      const markers = [
        [
          "OLAJIDE M. ADEWALE",
          7.656080,
          4.188705,
          './map-img/logo.png',
          57,
          46
        ],
        [
          "MORUF OBALEKE",
          7.658283,
          10.294895,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "ODEBOWALE MIDE",
          7.445683, 
          3.853623,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "FADARE SAMUEL",
          7.446457, 
          3.910670,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "OLUBODUN AYODEJI",
          7.434922,
          3.829390,
          './map-img/logo.png',
          57,
          46
        ],
      ];

      for(let i=0; i<markers.length; i++){
        const currMarker = markers[i];
        const marker = new google.maps.Marker({
          animation: google.maps.Animation.DROP,
          position: {lat: currMarker[1], lng: currMarker[2]},
          map,
          title: currMarker[0],
          icon: {
            url: currMarker[3],
            scaledSize: new google.maps.Size(currMarker[4],currMarker[5]),
          }
        });
  
        const infowindow = new google.maps.InfoWindow({
          content: currMarker[0],
        });
  
        marker.addListener("click", () => {
          infowindow.open(map,marker);
        });
      }

}
function ekitiInitMap() {
    map = new google.maps.Map(document.getElementById('ekiti-map'), {
        center: {lat: 7.850313, lng: 5.184713},
        zoom: 8,
        mapId: '116c04d903f08d87'
      });

      // Name
      // Latitude, Longitude
      // Image URL
      // scaledSize width, height
      const markers = [
        [
          "ONIBADEGUN A",
          7.850313,
          5.184713,
          './map-img/logo.png',
          57,
          46
        ],
        [
          "QED 696 QD",
          7.802108,
          5.517872,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "OJO SUNDAY",
          7.720820, 
          5.250285,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "FRANCIS SESAN",
          7.671223, 
          5.211025,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "YEE 059 QC",
          7.656290,
          5.185355,
          './map-img/logo.png',
          57,
          46
        ],
      ];

      for(let i=0; i<markers.length; i++){
        const currMarker = markers[i];
        const marker = new google.maps.Marker({
          animation: google.maps.Animation.DROP,
          position: {lat: currMarker[1], lng: currMarker[2]},
          map,
          title: currMarker[0],
          icon: {
            url: currMarker[3],
            scaledSize: new google.maps.Size(currMarker[4],currMarker[5]),
          }
        });
  
        const infowindow = new google.maps.InfoWindow({
          content: currMarker[0],
        });
  
        marker.addListener("click", () => {
          infowindow.open(map,marker);
        });
      }

}
function ondoInitMap() {
    map = new google.maps.Map(document.getElementById('ondo-map'), {
        center: {lat: 7.581658, lng: 4.703973},
        zoom: 8,
        mapId: '116c04d903f08d87'
      });

      // Name
      // Latitude, Longitude
      // Image URL
      // scaledSize width, height
      const markers = [
        [
          "CHUKWU BENEDICT AKR",
          7.581658,
          4.703973,
          './map-img/logo.png',
          57,
          46
        ],
        [
          "OLADIPUPO WALE",
          7.467043,
          4.355481,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "SAMUEL OJOCHEM",
          7.271902, 
          5.179633,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "WAIBI ISIAKA",
          7.267683, 
          5.200247,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "ADEWALE ASEGERE",
          7.270187,
          5.213087,
          './map-img/logo.png',
          57,
          46
        ],
      ];

      for(let i=0; i<markers.length; i++){
        const currMarker = markers[i];
        const marker = new google.maps.Marker({
          animation: google.maps.Animation.DROP,
          position: {lat: currMarker[1], lng: currMarker[2]},
          map,
          title: currMarker[0],
          icon: {
            url: currMarker[3],
            scaledSize: new google.maps.Size(currMarker[4],currMarker[5]),
          }
        });
  
        const infowindow = new google.maps.InfoWindow({
          content: currMarker[0],
        });
  
        marker.addListener("click", () => {
          infowindow.open(map,marker);
        });
      }

}
function kwaraInitMap() {
    map = new google.maps.Map(document.getElementById('kwara-map'), {
        center: {lat: 8.642152, lng: 4.603025},
        zoom: 8,
        mapId: '116c04d903f08d87'
      });

      // Name
      // Latitude, Longitude
      // Image URL
      // scaledSize width, height
      const markers = [
        [
          "ABDULRASAK ARO",
          8.642152,
          4.603025,
          './map-img/logo.png',
          57,
          46
        ],
        [
          "ABDULLAHI YUSUFU",
          8.649427,
          4.585340,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "ALADE",
          8.641488, 
          4.602065,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "GBOLADE ABEL",
          8.613045, 
          4.639943,
          './map-img/logo.png',
          57,
          46
          
        ],
        [
          "YUSUF GOBIR",
          8.618573,
          4.638305,
          './map-img/logo.png',
          57,
          46
        ],
      ];

      for(let i=0; i<markers.length; i++){
        const currMarker = markers[i];
        const marker = new google.maps.Marker({
          animation: google.maps.Animation.DROP,
          position: {lat: currMarker[1], lng: currMarker[2]},
          map,
          title: currMarker[0],
          icon: {
            url: currMarker[3],
            scaledSize: new google.maps.Size(currMarker[4],currMarker[5]),
          }
        });
  
        const infowindow = new google.maps.InfoWindow({
          content: currMarker[0],
        });
  
        marker.addListener("click", () => {
          infowindow.open(map,marker);
        });
      }

}