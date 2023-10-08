function SubmitOperationType(type) {
  
  myString = type;
  switch (type)
  {
    case 'palindrome' : 
      myString += " case 1";
      CalculateResult(type, 'abba');
      break;
    case 'anagram' : 
      myString += " case 2";
      CalculateResult(type, 'abba', 'abba');
      break;
    case 'pangram' : 
    CalculateResult(type, 'abba');
      myString += " case 3";
      break;
    default :
      myString += " default";
  }

  alert(myString + " button pressed");

  
}

function CalculateResult(type, word, word2)
{
   $.ajax({
    url : '/checker/CheckerController::ajaxRequest',
    type : 'POST',
    datatype: 'json',
    data: JSON.stringify({'type' : type, 'word1' : word, 'word2' : word2}),
    async: true,

    success: function(data, status)
    {
      console.log(type);
      $('#' + type + 'Result').html('<h1>' + data + '</h1>');
    },
    error: function(xhr, textStatus, errorThrown)
    {
      alert('AjaxRequest Failed');
    }
   })
}



