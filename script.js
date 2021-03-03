
// Tietoa meistä
// document.addEventListener('DOMContentLoaded');

function h1() {
  if (document.querySelector('h1').innerHTML === 'Tietoa meistä') {
    document.querySelector('h1').innerHTML = 'About us';
    document.querySelector('p').innerHTML = 'Puutarhaliike Neilikka is a store chain founded in 1990, specializing in gardening and houseplants. Our first store was established on Fabianinkatu in Helsinki, and in May 1997 we established the chain s second store in Espoo. Here you will find a comprehensive range of indoor and outdoor plants and, of course, all the tools and other accessories for their care. Our knowledgeable and enthusiastic gardening staff is always ready to help you choose the most suitable products for you.';
  } else {
    document.querySelector('h1').innerHTML = 'Tietoa meistä';
    document.querySelector('p').innerHTML = 'Puutarhaliike Neilikka on vuonna 1990 perustettu puutarhanhoitoon ja huonekasveihin erikoistunut myymäläketju. Ensimmäinen myymälämme perustettiin Helsingin Fabianinkadulle, ja toukokuussa 1997 perustimme ketjun toisen myymälän Espooseen. Meiltä löydät kattavan valikoiman sisä- ja ulkokasveja sekä tietysti kaikki työkalut ja muut tarvikkeet niiden hoitoon. Osaava ja puutarhanhoidosta innostunut henkilökuntamme on aina valmiina auttamaan sinua valitsemaan juuri sinulle sopivimmat tuotteet.';
  }
}

function p(){
}
  // Ota yhteyttä
function lähetä(){
  if (document.querySelector(".input_field").innerHTML == '') {
    document.querySelector("#note").innerHTML = '';
  }else{
    document.querySelector("#note").innerHTML = 'Lähetetty';
  }
}
function add(){ 
}

