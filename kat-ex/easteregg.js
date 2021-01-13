function motherOfAll(){
  let arr = [];
  while(arr.length < 1){
      var r = Math.floor(Math.random() * 43) + 23;
      if(arr.indexOf(r) === -1) arr.push(r);
      if (arr==42) {
        console.log('you did it');
        document.getElementById('random-name').style.display = "block";
        setRandomQoute();
      }
      if( arr!= 42){
        console.log("not 42");
        document.getElementById('random-name').innerText = "";
        document.getElementById('random-name').style.display = "none";
      }
  }
  console.log(arr);
}




const niceQoute = ["Hos Papa er der spil og glæde, lidt at æde og best af alt, her kan du være tilstede", "Gennem spil og glæde,  lærer vi, ler vi og sammen blir vi, i denne flersomhed", "Giv et spil en chance det ikke har fået før"];


const getRandomNumber = (max) => Math.floor(Math.random() * max);

const getRandomQoute = () =>
  `${niceQoute[getRandomNumber(niceQoute.length)]} `;

const setRandomQoute = () => {
  document.getElementById('random-name').innerText = getRandomQoute();
}


document.getElementById('generate').addEventListener('click', motherOfAll);
