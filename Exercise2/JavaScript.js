
function validate()
{
  if(!document.getElementById("USER_ID").value)
  {
    document.getElementById("feedbackBox").innerHTML = "You may not submit a blank ID.";
    return false;
  }
  else
  {
    return true;
  }
}
