
function phonenovalidate(inputElement) {
    var inputValue = inputElement.value;
    phone=inputValue;
    if (phone.length === 10) { 
      inputElement.style.color = "black"; 
    } else {
      inputElement.style.color = "red"; 
    }
  }

  function convertToUppercase(inputElement)
{
  inputElement.value = inputElement.value.toUpperCase();
}

function emailvalidate(inputElement)
{
  var inputValue = inputElement.value;
  email=inputValue;
  const pattern=/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+\.(edu|com|net|org|in|)$/;
  if (pattern.test(email)) {
    inputElement.style.color = ''; 
  } else {
    inputElement.style.color = "red"; 
  }

}