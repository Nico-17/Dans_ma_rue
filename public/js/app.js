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
    
    addMarker(lat,lng){
        let point = [lat, lng]
        this.bounds.push(point)
        return new LeafletMarker(point, this.map)
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
    constructor(point,map){
        this.marker = L.marker(point).addTo(map)
        this.marker.bindPopup('<p>popupContent</p>').openPopup()
    }
}

const initMap =  async function(){
    let map = new LeafletMap()
    await map.load($map)
    Array.from(document.querySelectorAll('.js-marker')).forEach((item) => {
        let marker = map.addMarker(item.dataset.lat, item.dataset.lng)
        
    })
    map.center()
}

if ($map !== null){
    initMap()
}
