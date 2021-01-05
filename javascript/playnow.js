let spilnu = document.getElementById('q4-1');

function finalChange(){
      $('form').attr('action', 'final-10.php');
      console.log('yay');

}


  spilnu.addEventListener('click', finalChange);




    let spilnu2 = document.getElementById('q4-2');

    function finalChange2(){
          $('form').attr('action', 'q5-7.php');
          console.log('yay');

    }

    spilnu2.addEventListener('click', finalChange2);
