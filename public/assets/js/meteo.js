/* METEO */
console.log('Coucou !');
let showVille = document.querySelector("#showVille");
const imgIcone = document.querySelector(".logo-meteo");
let description = document.querySelector("#description");
let showTemp = document.querySelector("#showTemp");
let changeVille = document.querySelector("#changeVille");

let ville = "Quimper";
recupererMeteo(ville);

changeVille.addEventListener('click', () => {
    ville = prompt("Quelle ville souhaitez-vous voir ?");
    recupererMeteo(ville);
})

function recupererMeteo(ville) {
    const url = "https://api.openweathermap.org/data/2.5/weather?q=" + ville + "&appid=19adf7eba36af14fe6a58b280574d715&exclude=minutely&units=metric&lang=fr";

    let requete = new XMLHttpRequest();
    requete.open("GET", url);
    requete.responseType = "json";
    requete.send();

    requete.onload = function() {
        if (requete.readyState === XMLHttpRequest.DONE) {
            if (requete.status === 200) {
                let reponse = requete.response;
                console.log(reponse);
                showVille.textContent = reponse.name;
                let temperatureActuelle = reponse.main.temp;
                description.textContent = reponse.weather[0].description + ", " + Math.trunc(temperatureActuelle) + "°";
                // showTemp.textContent = Math.trunc(temperatureActuelle) + "°";

                // Icone dynamique
                let heureActuelle = new Date().getHours();
                console.log(heureActuelle);
                if (heureActuelle >= 6 && heureActuelle < 21) {
                    imgIcone.src = `assets/images/meteo/jour/${reponse.weather[0].icon}.svg`;
                } else {
                    imgIcone.src = `assets/images/meteo/nuit/${reponse.weather[0].icon}.svg`;
                }
            }
        }
    }
}