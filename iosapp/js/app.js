function validateForm()
{
var appname=document.forms["myform"]["appname"].value;
var bid=document.forms["myform"]["bid"].value;
var bver=document.forms["myform"]["bver"].value;

if (appname==null || appname=="")
  {
  alert("App name must be filled out");
  return false;
  }
  
  if (bid==null || bid=="")
  {
  alert("Bundle Identifier must be filled out");
  return false;
  }
  
  if (bver==null || bver=="")
  {
  alert("Bundle Version must be filled out");
  return false;
  }
  
}