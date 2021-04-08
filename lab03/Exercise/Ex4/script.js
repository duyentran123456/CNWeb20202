  
function validateName() {
  var x = document.getElementById("name");
  if(x.value == "") {
    alert("Phần Họ tên không được để trống.");
    x.focus();
    return false;
  }
  return true;
}
  
function validateAddress() {
  var x = document.getElementById("address");
  if(x.value == "") {
    alert("Phần địa chỉ không được để trống!");
    x.focus();
    return false;
  }
  return true;
}

  
function validateEmail(){
  var regExp = /^[A-Za-z][\w$.]+@[\w]+\.\w+$/;
  var email = document.getElementById("email").value;
  if(email==""){
    alert("Phần Email là bắt buộc!");
    return false;
  }
  if (regExp.test(email)) 
      return true; 
    else {
      alert("Email không hợp lệ!");
      return false;
    }
}

function validatePhone() {
  var x = document.getElementById("phone");
  if(x.value == "") {
    alert("Số điện thoại là bắt buộc!");
    x.focus();
    return false;
  }
  var phoneCheck = new RegExp("[0-9]{9}")
  if(phoneCheck.test(x.value)) {
    alert("Số điện thoại không hợp lệ!")
    return false;
  }
  return true;
}


function validateCCCD() {
  var x = document.getElementById("identifyNumber");
  if(x.value == "") {
    alert("Phần CCCD là bắt buộc!");
    x.focus();
    return false;
  }
  var cccdCheck = new RegExp("[0-9]{12}")
  if(cccdCheck.test(x.value)) {
    alert("Số CCCD không hợp lệ!")
    return false;
  }
  return true;
}

function validateAssurance() {
  var x = document.getElementById("assurance");
  if(x.checked == false) {
    alert("Chưa cam kết!");
    return false;
  }
  else{
    return true;
  }
}

function  validateForm() {
  document.getElementById("submitButton").addEventListener("click", function () {
    if(!validateName()) return false;
    else if(!validateAddress()) return false;
    else if(!validateEmail()) return false;
    else if(!validatePhone()) return false;
    else if(!validateCCCD()) return false;
    else if(!validateAssurance()) return false;
  }, false);
}
window.addEventListener("load", validateForm(), false);