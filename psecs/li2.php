<script defer type="text/javascript">

var guruText = [
    ['Du er der næsten!', 'Jeg kan også godt lide en overraskelse', 'Det er den vej jeg foretrækker', 'Puuuh, jeg kan godt men er ikke vild med det', 'Jøsses, du er da ikke bange for noget'],
    ['Jeg kan lide uendelige eventyr', 'Et udfordrene spil, eller hvad siger du?', 'Jo da, ikke alle dage kan være lige store eventyr', 'Det går an, makker', 'Ja! Nu sker der noget'],
    ['Alt med måde', 'Mon universet finder jer et balanceret spil', 'Hmm, det er fint', 'Ahh en perfekt balance', 'Det er en udfordring, men jeg tror du kan klare det']
];

const templateText = document.getElementById('template');
let surpriseBtn = document.querySelector('.q1');
let littleBtn2 = document.querySelector('.q2');
let mediumBtn2 = document.querySelector('.q3');
let bigBtn2 = document.querySelector('.q4');


function btnFunction(){
  templateText.innerHTML= guruText [<?php echo $_SESSION['guruNum']; ?>] [0];

  surpriseBtn.addEventListener('click', surpriseBtnFunction);
  littleBtn2.addEventListener('click', littleBtn2Function);
  mediumBtn2.addEventListener('click', mediumBtn2Function);
  bigBtn2.addEventListener('click', bigBtn2Function);
};

function surpriseBtnFunction(){
  templateText.innerHTML= guruText [<?php echo $_SESSION['guruNum']; ?>] [1];
};

function littleBtn2Function(){
  templateText.innerHTML= guruText [<?php echo $_SESSION['guruNum']; ?>] [2];
};

function mediumBtn2Function(){
  templateText.innerHTML= guruText [<?php echo $_SESSION['guruNum']; ?>] [3];
};

function bigBtn2Function(){
  templateText.innerHTML= guruText [<?php echo $_SESSION['guruNum']; ?>] [4];
};



btnFunction();




</script>
