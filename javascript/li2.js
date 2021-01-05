let bg = document.querySelector('.bgwrapper4');
let cecilia = document.querySelector('.Cecilia');
let malik = document.querySelector('.Malik');
let sarah = document.querySelector('.Sarah');

let littleBtn = document.getElementById('q7-1');
let mediumBtn = document.getElementById('q7-2');
let alotBtn = document.getElementById('q7-3');

// Her vælgess "lige ud af vejen" //
function littleBtnFunction(){
  bg.style.backgroundImage = "url('media/dif1.png')";
  bg.style.backgroundSize = "100%";
};

// Her vælgers "Lidt op af vejen" //
function mediumBtnFunction(){
  bg.style.backgroundImage = "url('media/diff2.png')";
  bg.style.backgroundSize = "100%";
};

// Her vælgers "Helt op af vejen" //
function alotBtnFunction(){
  bg.style.backgroundImage = "url('media/diff3.png')";
  bg.style.backgroundSize = "100%";
};

littleBtn.addEventListener('click', littleBtnFunction);
mediumBtn.addEventListener('click', mediumBtnFunction);
alotBtn.addEventListener('click', alotBtnFunction);
