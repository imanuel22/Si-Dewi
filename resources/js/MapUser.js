var map = L.map("map").setView([-8.649973065457678, 115.22184194637907], 13);
L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
        '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);

var marker = L.marker([-8.649973065457678, 115.22184194637907]).addTo(map);

const Card1 = document.getElementById("Card1");
Card1.addEventListener("click", (event) => {
    const CardInfo = document.getElementById("CardInfo");
    if (CardInfo.style.visibility === "visible") {
        CardInfo.style.visibility = "hidden";
        marker.closePopup(); // Tutup popup pada marker
    } else {
        CardInfo.style.visibility = "visible";
        marker.openPopup(); // Buka popup pada marker
    }
});
marker
    .bindPopup(
        '<a href="https://maps.google.com/?q=-8.649973065457678,115.22184194637907">Telusuri Desa</a>'
    )
    .on("click", (event) => {
        const CardInfo = document.getElementById("CardInfo");
        if (CardInfo.style.visibility === "visible") {
            CardInfo.style.visibility = "hidden";
        } else {
            CardInfo.style.visibility = "visible";
        }
    });

// var marker = L.marker([-8.656563172328768, 115.23448432470899]).addTo(map);
// marker
//   .bindPopup(
//     '<a href="https://maps.google.com/?q=-8.649973065457678,115.22184194637907">Telusuri Desa</a>'
//   )
//   .on("click", function () {
//     document.getElementById("Card2").style.backgroundColor = "red";
//   });
