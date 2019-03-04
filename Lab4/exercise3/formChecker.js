function check() {

  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  if (username == "") {
    alert("Username field cannot be blank");
    return false;
  }
  if (password == "") {
    alert("Password field cannot be blank");
    return false;
  }

  let emailFormat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //regular expression to test valid email
  if (emailFormat.test(username) == false) {
    alert("User name must be in the form of an email address (name@domain.com)");
    return false;
  }

  let desk = document.getElementById("desk").value;
  let chair = document.getElementById("chair").value;
  let lamp = document.getElementById("lamp").value;

    if (desk == "" || chair == "" || lamp == "") {
        alert("Quantities cannot be blank");
        return false;
    }

    let shipping = document.getElementsByName("shipping");
    if (document.forms["formSubmit"]["shipping"].value == "") {
      alert("Must pick a shipping option");
      return false;
    }

  else {
    document.forms["formSubmit"].submit();
    return true;
  }
}
