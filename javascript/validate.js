//Validering til q1-03
function validateForm() {
  //x er valuen i formen
  var x = document.forms["myForm"]["select-q1[]"].value;
  //Hvis formen bliver sendt hvor valuen er blank
  if (x == "") {

  // skal vores validerings div vise sig
    document.querySelector('.validate').style.display = "block";

  //og sørge for at man ikke kan komme videre til næste side
    return false;
  }
}


//validering til q2-4
function validateForm2() {
  var cbox = document.forms["myForm2"]["select-q2[]"];
  if (
    cbox[0].checked == false &&
    cbox[1].checked == false &&
    cbox[2].checked == false &&
    cbox[3].checked == false &&
    cbox[4].checked == false
  ) {

    // skal vores validerings div vise sig
      document.querySelector('.validate').style.display = "block";

    return false;
  } else {
    return true;
  }
}

//validering til q3-5
function validateForm3() {
  var cbox = document.forms["myForm3"]["select-q3[]"];
  if (
    cbox[0].checked == false &&
    cbox[1].checked == false &&
    cbox[2].checked == false &&
    cbox[3].checked == false
  ) {

    // skal vores validerings div vise sig
      document.querySelector('.validate').style.display = "block";

    return false;
  } else {
    return true;
  }
}





//validering til q4-6
function validateForm4() {
    //x er valuen i formen
  var x = document.forms["myForm4"]["select-q4[]"].value;
  //Hvis formen bliver sendt hvor valuen er blank
  if (x == "") {

  // skal vores validerings div vise sig
    document.querySelector('.validate').style.display = "block";
      //og sørge for at man ikke kan komme videre til næste side
    return false;
  }}

  //Validering til q5-7
  function validateForm5() {
      //x er valuen i formen
    var x = document.forms["myForm5"]["select-q5[]"].value;
    //Hvis formen bliver sendt hvor valuen er blank
    if (x == "") {

      // skal vores validerings div vise sig
      document.querySelector('.validate2').style.display = "block";
      //og sørge for at man ikke kan komme videre til næste side
      return false;
    }}

    //validering til q6-8
    function validateForm6() {
      var cbox = document.forms["myForm6"]["select-q6[]"];
      if (
        cbox[0].checked == false &&
        cbox[1].checked == false &&
        cbox[2].checked == false &&
        cbox[3].checked == false &&
        cbox[4].checked == false &&
        cbox[5].checked == false &&
        cbox[6].checked == false &&
        cbox[7].checked == false
      ) {

        // skal vores validerings div vise sig
          document.querySelector('.validate2').style.display = "block";

        return false;
      } else {
        return true;
      }
    }

    //validering til q7-9
    function validateForm7() {
      var cbox = document.forms["myForm7"]["select-q7[]"];
      if (
        cbox[0].checked == false &&
        cbox[1].checked == false &&
        cbox[2].checked == false &&
        cbox[3].checked == false
      ) {

        // skal vores validerings div vise sig
          document.querySelector('.validate2').style.display = "block";

        return false;
      } else {
        return true;
      }
    }
