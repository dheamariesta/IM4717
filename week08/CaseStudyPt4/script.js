/*
The name field contains alphabet characters and character spaces.
The email field contains a user name part follows by “@” and a domain name part.
The user name contains word characters including hyphen (“-”) and period (“.”).
The domain name contains two to four address extensions.
Each extension is string of word characters and separated from the others by a period (“.”).
The last extension must have two to three characters.
The start date cannot be from today and the past.
The experience field cannot be empty (This can be done in HTML5)
*/
function validateEmail(){
  var email = document.getElementById('email').value;

  // if email have @
  if (email.indexOf('@') != -1){
    // split email
    var username = email.split('@')[0];
    var domain = email.split('@')[1];
    console.log(username, domain);

    //check if username contains hyphen and period
    if (username.indexOf('-') == -1){
      alert("Please add hyphen '-' to user name");
    }

    if (username.indexOf('.') == -1){
      alert("Please add dot '.' to user name");
    }

    //check domain name
    if(domain.indexOf('.') != -1){
      var domainArr = domain.split('.');

      // check the number of address extensions
      if(domainArr.length < 2 || domainArr.length > 4){
        alert('domain name contains two to four address extensions');
      }

      // check the last extension
      if(domainArr[domainArr.length - 1].length < 2 || domainArr[domainArr.length - 1].length > 3){
        alert('last extension must have two to three characters.');
      }
    } else {
      alert('please input correct domain extension');
    }
  } else {
    alert('please add @ to email');
  }
}

function allLetter(inputtxt){
  // console.log(inputtxt);
  var letters = /^[a-zA-Z\s]*$/;

  if(inputtxt.match(letters)){
    return true;
  }
  else{
    // alert("message");
    return false;
  }
}
function validateName(){
  var name = document.getElementById('name').value;
  // console.log(name);
  if (allLetter(name)) {
    // alphabet letters found
    console.log("correct");
  } else {
    alert("Name only accept letters and space");
  }
}
// input listener for email
// document.getElementById('email').addEventListener('onblur', validateEmail);
function checkStartDate(){
  var getDate = document.getElementById('date').value;
  // console.log(getDate);
  // console.log(typeof(getDate));
  var startDate = new Date(getDate);
  var todayDate = new Date();
  var tomorrowDate = new Date();
  tomorrowDate.setDate(todayDate.getDate() + 1);
  // console.log(tomorrowDate);
  if (startDate < tomorrowDate){
    alert("Start date cannot be today or in the past");
  }
}

function selectedMenu(){
  var justJavaSelection = document.querySelector('input[name="just-java"]:checked').value;
  var cafeAuLaitSelection = document.querySelector('input[name="cafe-au-lait"]:checked').value;
  var icedCappucinoSelection = document.querySelector('input[name="iced-cappuccino"]:checked').value;

  // console.log(justJavaSelection);
  // console.log(cafeAuLaitSelection);
  // console.log(icedCappucinoSelection);

  var justJavaQuantity = document.getElementById('just-java-qty').value;
  var cafeAuLaitQuantity = document.getElementById('cafe-au-lait-qty').value;
  var icedCappucinoQuantity = document.getElementById('iced-cappuccino-qty').value;

  // console.log(justJavaQuantity);
  // console.log(cafeAuLaitQuantity);
  // console.log(icedCappucinoQuantity);

  var justJavaSubtotal = document.getElementById('just-java-subtotal');
  justJavaSubtotal.value = parseFloat(justJavaSelection) * parseFloat(justJavaQuantity);

  var cafeSubtotal = document.getElementById('cafe-au-lait-subtotal');
  cafeSubtotal.value = parseFloat(cafeAuLaitSelection) * parseFloat(cafeAuLaitQuantity);

  var icedCappuccinoSubtotal = document.getElementById('iced-cappuccino-subtotal');
  icedCappuccinoSubtotal.value = parseFloat(icedCappucinoSelection) * parseFloat(icedCappucinoQuantity);


  document.getElementById('total').value = parseFloat(justJavaSubtotal.value) + parseFloat(cafeSubtotal.value) + parseFloat(icedCappuccinoSubtotal.value);
}

function validateForm(){
  validateName();
  validateEmail();
  checkStartDate();
}

function editJustJava(){
  //EDIT JUST JAVA PRICE
  var editJustJavaPrice = document.getElementById('edit-just-java');
  if (editJustJavaPrice.checked){
    var currentPrice = document.getElementById('just-java-price').innerHTML;
    document.getElementById('just-java-price').innerHTML = `<input type="text" id="editing-just-java" value="` + currentPrice + `"/>`
  } else {
    var newPrice = parseFloat(document.getElementById('editing-just-java').value);
    if (isNaN(newPrice)){
      alert("Please input number!");
      editJustJavaPrice.checked = true;
    } else {
      document.getElementById('hidden-price').value = newPrice;
      document.getElementById('just-java-price').innerHTML = newPrice;
      document.getElementById('jsform').submit();

      // var request = $.ajax({
      //   url: "edit_just_java.php",
      //   method: "POST",
      //   data: { name : "Just Java", price: newPrice },
      //   dataType: "html"
      // });
      //
      // request.done(function( msg ) {
      //   console.log(msg);
      //   $( "#error" ).html( msg );
      // });


    }

  }
}
function editCafeAuLaitPrice(){

  //EDIT CAFE AU LAIT SINGLE PRICE
  var editCafeAuLait = document.getElementById('edit-cafe-au-lait');
  if (editCafeAuLait.checked){
    var currentSinglePrice = document.getElementById('cafe-au-lait-single-price').innerHTML;
    document.getElementById('cafe-au-lait-single-price').innerHTML = `<input type="text" id="editing-cafe-au-lait-single-price" value="` + currentSinglePrice + `"/>`

    var currentDoublePrice = document.getElementById('cafe-au-lait-double-price').innerHTML;
    document.getElementById('cafe-au-lait-double-price').innerHTML = `<input type="text" id="editing-cafe-au-lait-double-price" value="` + currentDoublePrice + `"/>`

  } else {
    var newSinglePrice = parseFloat(document.getElementById('editing-cafe-au-lait-single-price').value);
    var newDoublePrice = parseFloat(document.getElementById('editing-cafe-au-lait-double-price').value);


    if (isNaN(newSinglePrice) || isNaN(newDoublePrice)){
      alert("Please input number!");
      editCafeAuLait.checked = true;
    } else {
      document.getElementById('cafe-au-lait-single-price').innerHTML = newSinglePrice;
      document.getElementById('cafe-au-lait-double-price').innerHTML = newDoublePrice;

      document.getElementById('cafe_single_price').value = newSinglePrice;
      document.getElementById('cafe_double_price').value = newDoublePrice;
      document.getElementById('jsform').submit();

    }
  }

  //EDIT CAFE AU LAIT DOUBLE PRICE

}

function editIcedCappuccinoPrice(){
  var editCappuccino = document.getElementById('edit-cappuccino');
  if (editCappuccino.checked){
    var currentSinglePrice = document.getElementById('cappuccino-single-price').innerHTML;
    document.getElementById('cappuccino-single-price').innerHTML = `<input type="text" id="editing-cappuccino-single-price" value="` + currentSinglePrice + `"/>`

    var currentDoublePrice = document.getElementById('cappuccino-double-price').innerHTML;
    document.getElementById('cappuccino-double-price').innerHTML = `<input type="text" id="editing-cappuccino-double-price" value="` + currentDoublePrice + `"/>`

  } else {
    var newSinglePrice = parseFloat(document.getElementById('editing-cappuccino-single-price').value);
    var newDoublePrice = parseFloat(document.getElementById('editing-cappuccino-double-price').value);


    if (isNaN(newSinglePrice) || isNaN(newDoublePrice)){
      alert("Please input number!");
      editCappuccino.checked = true;
    } else {
      document.getElementById('cappuccino-single-price').innerHTML = newSinglePrice;
      document.getElementById('cappuccino-double-price').innerHTML = newDoublePrice;

      document.getElementById('iced_single_price').value = newSinglePrice;
      document.getElementById('iced_double_price').value = newDoublePrice;
      document.getElementById('jsform').submit();
    }
  }

}

// $( document ).ready(function() {
//   var request = $.ajax({
//     url: "get_price.php",
//     method: "GET"
//   });
//
//   request.done(function( msg ) {
//     console.log(msg);
//   });
// });
