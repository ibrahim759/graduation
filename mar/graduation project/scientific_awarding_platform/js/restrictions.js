$(document).ready(function() {
  $('#is_arabic').on('input', function() {
      var value = $(this).val();
      // Regular expression pattern to match Arabic letters
      var regex = /[\u0600-\u06FF]/;
      
      if (!regex.test(value)) {
          // If there are non-Arabic characters, replace them with empty string
          $(this).val(value.replace(/[^\u0600-\u06FF]/g, ''));
      }
  });
});


const emailInput = document.querySelector("input[name='email']");

// Check if the email address contains @
function validateEmail() {
  const email = emailInput.value;

  // If the email address does not contain @ or edu.eg, display an error message
  if (!email.includes("@")) {
    alert("البريد الإلكتروني غير صالح. يجب أن يحتوي على @ ");
    return false;
  }

  // If the email address is valid, return true
  return true;
}

// Add an event listener to the email input field
emailInput.addEventListener("change", validateEmail);



//منع المستخدم من ادخال اي حروف غير انجليزية
function EnglishlettersOnly(input){
    var regex=/[^A-Za-z]/gi;
    input.value=input.value.replace(regex,"")
}

function numbersOnly(input){
    var regex=/[^0-9]/gi;
    input.value=input.value.replace(regex,"")
}

function lettersOnly(input){
    var regex=/[^\w]/gi;
    input.value=input.value.replace(regex,"")
}

function validateIdNumber(input) {
  var value = input.value;
  var regex = /^\d{14}$/; // 14-digit ID number pattern
  if (!regex.test(value)) {
      var extractedNumber = value.slice(0, 14);
      input.value = extractedNumber;
  }
}



function validatepassNumber(input) {
  var value = input.value;
  var regex = /^\d[a-zA-Z0-9]$/; // 14-digit ID number pattern
  if (!regex.test(value)) {
      var extractedNumber = value.slice(0, 9);
      input.value = extractedNumber;
  }
}


function isAlphabet(event) {
    var charCode = (event.which) ? event.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return true;
    }
    return false;
}

