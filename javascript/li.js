let fantasyBtn = document.getElementById('q6-1');
let horrorBtn = document.getElementById('q6-2');
let sciBtn = document.getElementById('q6-3');
let puzzleBtn = document.getElementById('q6-4');
let triviaBtn = document.getElementById('q6-5');
let kortspilBtn = document.getElementById('q6-6');
let selvskabBtn = document.getElementById('q6-7');

let bg = document.querySelector('.bgwrapper4');
let guru = document.querySelector('.guruwrapper');





function guruFunction(genre, bgsize){
  bg.style.backgroundImage = "url('media/"+genre+".png')" ;
  guru.style.display= "none";
  bg.style.backgroundSize = bgsize + "%";
};






fantasyBtn.addEventListener('click', function(){ guruFunction('fantasi',100)});
horrorBtn.addEventListener('click', function(){ guruFunction('horror',100)});
sciBtn.addEventListener('click', function(){ guruFunction('sci',100)});
puzzleBtn.addEventListener('click', function(){ guruFunction('Maze',120)});
triviaBtn.addEventListener('click', function(){ guruFunction('Trivia',120)});
kortspilBtn.addEventListener('click', function(){ guruFunction('Cards',120)});
selvskabBtn.addEventListener('click', function(){ guruFunction('selskab',100)});
