function motherOfAll(){
  let arr = [];
  while(arr.length < 1){
      var r = Math.floor(Math.random() * 42) + 1;
      if(arr.indexOf(r) === -1) arr.push(r);
      if (arr==42) {
        console.log('you did it');
        document.getElementById('thediv').style.display = "grid";
        setRandomQoute();
        console.log(getRandomQoute());

      }
      if( arr!= 42){
        document.getElementById('randomquote').innerText = "";
        document.getElementById('thediv').style.display = "none";
      }

  }


}




const niceQoute = ["Hos Papa er der spil og glæde, lidt at æde og bedst af alt, her kan du være tilstede", "De virtuelle spilguides er lige rundt om hjørnet","Her hos Papa er det meste økologisk", "Giv et spil en chance det ikke har fået før"];


const getRandomNumber = (max) => Math.floor(Math.random() * max);

const getRandomQoute = () =>
  `${niceQoute[getRandomNumber(niceQoute.length)]} `;

const setRandomQoute = () => {
  document.getElementById('randomquote').innerText = getRandomQoute();
}


document.getElementById('generate').addEventListener('click', motherOfAll);
