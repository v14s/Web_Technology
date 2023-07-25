function required()
{
var empt = document.forms["form1"]["text1"].value;
if (empt == "")
{
alert("Please fill out the fields.....");
return false;
}
else 
{
alert('Code has accepted : you can try another.....');
return true; 
}
}
function Emptyvalidation(inputtxt)
      {
 if (inputtxt.value.length == 0) 
      {
 document.inputtxt.style.background =   'Yellow'; 
      }
 else
      {
 document.inputtxt.style.background = 'White';
      }
 return error;  
      }
