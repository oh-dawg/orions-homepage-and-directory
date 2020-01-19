function changeImage(){
if( document.getElementByClassName('imageDiv').style.display == "none" ) 
{
    document.getElementByClassName('imageDiv').style.visibility="block";
} else 
  {
   document.getElementByClassName('imageDiv').style.visibility="none";
  }
}