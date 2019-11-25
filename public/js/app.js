let $map = document.querySelector['#map']


class LeafletMap{

    constructor(){
        this.map = null
        this.bounds = []
    }

    async load(element){
        return new Promise((resolve, reject) => {
            $script('https://unpkg.com/leaflet@1.5.1/dist/leaflet.js', () => {
                this.map = L.map('map')
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
                }).addTo(this.map)
                resolve()
            })    
        })      
    }
    
    addMarker(lat,lng, info){
        let point = [lat, lng]
        this.bounds.push(point)
        return new LeafletMarker(point, this.map, info)
    }

    addMarkerArealiser(lat,lng, infoarealiser){
        let point = [lat, lng]
        this.bounds.push(point)
        return new LeafletMarkerArealiser(point, this.map, infoarealiser)
    }

    addMarkerResolu(lat,lng, inforesolu){
        let point = [lat, lng]
        this.bounds.push(point)
        return new LeafletMarkerResolu(point, this.map, inforesolu)
    }

    addMarkerRefuser(lat,lng, inforefuser){
        let point = [lat, lng]
        this.bounds.push(point)
        return new LeafletMarkerRefuser(point, this.map, inforefuser)
    }

    center (){
        this.map.fitBounds(this.bounds)
    }

    /* addMarker(lat, lng, text){
        L.popup({
            autoClose: false,
            className: 'marker',
            maxWidth: 300
        })
        .setLatLng([lat, lng])
        .openOn(this.map)
    } */
}

class LeafletMarker{
    constructor(point,map, info){
        this.marker = L.marker(point).addTo(map)
        this.marker.bindPopup(info).openPopup()
    }
}

class LeafletMarkerArealiser{
    constructor(point,map, infoarealiser){
        var myIcon = L.icon({
			iconUrl: "images/mappointer_orange.svg",
			iconSize: [41, 41],
			iconAnchor: [25, 38],
            popupAnchor: [-3, -35],
        });
        this.markerarealiser = L.marker(point, { icon: myIcon }).addTo(map)
        this.markerarealiser.bindPopup(infoarealiser).openPopup()
    }
}

class LeafletMarkerResolu{
    constructor(point,map, inforesolu){
        var myIcon = L.icon({
			iconUrl: "images/mappointer_green.svg",
			iconSize: [41, 41],
			iconAnchor: [25, 38],
            popupAnchor: [-3, -35],
        });
        this.markerresolu = L.marker(point, { icon: myIcon }).addTo(map)
        this.markerresolu.bindPopup(inforesolu).openPopup()
    }
}

class LeafletMarkerRefuser{
    constructor(point,map, inforefuser){
        var myIcon = L.icon({
			iconUrl: "images/mappointer_red.svg",
			iconSize: [41, 41],
			iconAnchor: [25, 38],
            popupAnchor: [-3, -35],
        });
        this.markerrefuser = L.marker(point, { icon: myIcon }).addTo(map)
        this.markerrefuser.bindPopup(inforefuser).openPopup()
    }
}


const initMap =  async function(){
    let map = new LeafletMap()
    await map.load($map)
    Array.from(document.querySelectorAll('.js-marker')).forEach((item) => {
        let marker = map.addMarker(item.dataset.lat, item.dataset.lng, item.dataset.info)
    })
    Array.from(document.querySelectorAll('.js-marker-a-realiser')).forEach((item) => {
        let markerarealiser = map.addMarkerArealiser(item.dataset.lat, item.dataset.lng, item.dataset.infoarealiser)
    })
    Array.from(document.querySelectorAll('.js-marker-resolu')).forEach((item) => {
        let markerresolu = map.addMarkerResolu(item.dataset.lat, item.dataset.lng, item.dataset.inforesolu)
    })
    Array.from(document.querySelectorAll('.js-marker-refuser')).forEach((item) => {
        let markerrefuser = map.addMarkerRefuser(item.dataset.lat, item.dataset.lng, item.dataset.inforefuser)
    })
    map.center()
}

if ($map !== null){
    initMap()
}
