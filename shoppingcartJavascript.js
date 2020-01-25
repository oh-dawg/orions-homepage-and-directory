
//document.getElementById('phoneWarning').style.display='none';
//confirm("my js file is active");
// check week 6 of web eng 1 for reference
function checkPhone(phoneNumber)
{

   //confirm("My js file is active, so is my function");
   
   var pNToCheck = /^\d{3}-\d{3}-\d{4}$/.test(phoneNumber.value);  // need phoneNumber.value since your passing it in as this on the html
   // this in html is the object of the input as an object. phoneNumber.value in the javascript co-erces the input from the input object so it can be manipulated.
   // https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp
   

      if(pNToCheck)
      {
         
         document.getElementById('phoneWarning').style.display='none';
         //return true;
         
      }
      else
      {
      
      
         document.getElementById('phoneWarning').style.display='block';
         //confirm("phone number doesn't match");
         //return false;
         
      }


}

function widgetCost(widgetVariable)
{ 
   
   var x = widgetVariable;
   
   // one method that takes in all checks, minus or add total based on checks that came in.
   
   widget = 10;

}
 
function gizmoCost()
{

   gizmo = 15;

}

function whatzitCost()
{

   whatzit = 20;

}

function infindibulatorCost()
{

   infindibulator = 25;

}
// run total every time on all of them, look at the object coming in, if checked, add, if not checked, minus it.
function total()
{ 
  
  var total = widget + gizmo + whatzit + infindibulator;
  total = total.toFixed(2);
  document.getElementById('total').value=total;

}


function checkCard(cardNumber)
{

   var cardNToCheck = /^\d{16}$/.test(cardNumber.value);
   
   if(cardNToCheck)
   {
   
      document.getElementById('cardWarning').style.display='none';
   
   }
   else
   {
   
      document.getElementById('cardWarning').style.display='block';
   
   }
   
}

function checkCardDate(cardDate)
{

   var cardDateNToCheck = /^[0-1][0-9]\/[0-3][0-9]\/[2][0][1-2][8]$/.test(cardDate.value);
   
   if(cardDateNToCheck)
   {
   
      document.getElementById('cardDateWarning').style.display='none';
   
   }
   else
   {
   
      document.getElementById('cardDateWarning').style.display='block';
   
   }
   
}

function resetEverything()
{

   document.getElementById('firstNameField').value ='';
   document.getElementById('firstNameField').focus();
   document.getElementById('lastNameField').value ='';
   document.getElementById('addressField').value ='';
   document.getElementById('phoneField').value ='';
   document.getElementById('cardNumberField').value ='';
   document.getElementById('cardExpirationField').value ='';

}

function validateEverything()
{
   var firstName = document.getElementById('firstNameField').value;
   var lastName = document.getElementById('lastNameField').value;
   var address = document.getElementById('addressField').value;
   var phoneNumber = document.getElementById('phoneField').value;
   var cardNumber = document.getElementById('cardNumberField').value;
   var cardDate = document.getElementById('cardExpirationField').value;

   if(firstName && lastName && address && phoneNumber && cardNumber && cardDate)
   {
   
   document.getElementById('blankWarning').style.display='none';
   
   }
   else
   {
   
   document.getElementById('blankWarning').style.display='block';
      
      if(!firstName)
      {
        
         document.getElementById('firstNameField').focus();
   
      }
   
      if(!lastName)
      {
        
        document.getElementById('lastNameField').focus();
   
      }
      
      if(!address)
      {
   
         document.getElementById('addressField').focus();
   
      }
      
      if(!phoneNumber)
      {
   
         document.getElementById('phoneField').focus();
   
      }
      
      if(!cardNumber)
      {
   
         document.getElementById('cardNumberField').focus();
   
      }
      
      if(!cardDate)
      {
   
         document.getElementById('cardExpirationField').focus();
   
      }
   
   }
   
}
