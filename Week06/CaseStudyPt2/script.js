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
function validateName(){
  var name = document.getElementById('name').value;
  if (name.match(/[a-z]/i)) {
    // alphabet letters found
  }
}
// input listener for email
// document.getElementById('email').addEventListener('onblur', validateEmail);
