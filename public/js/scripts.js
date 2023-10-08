function SubmitOperationType(type) 
{
  $('#' + type + 'Result').html('');

  var word = $('#' + type + 'Word').val();
  var comparison = $('#' + type + 'Comparison').val();

  if (word == "" || word == undefined) 
  {
    $('#' + type + 'Result').html('Please ensure all fields are completed.');
    return;
  }

  if (type == 'anagram' && (comparison == "" || comparison == undefined) )
  {
    $('#' + type + 'Result').html('Please ensure all fields are completed.');
    return;
  }

  switch (type)
  {
    case 'palindrome' : 
      CalculateResult(type, word);
      break;
    case 'anagram' : 
      CalculateResult(type, word, comparison);
      break;
    case 'pangram' : 
      CalculateResult(type, word);
      break;
    default :
      $('#' + type + 'Result').html('<h2>Error: please try again.</h2>');
  }
    
}

function CalculateResult(type, word, comparison)
{
   $.ajax({
    url : '/checker/CheckerController::ajaxRequest',
    type : 'POST',
    datatype: 'json',
    data: JSON.stringify({'type' : type, 'word' : word, 'comparison' : comparison}),
    async: true,

    success: function(data, status)
    {
      if (data) 
      {
        $('#' + type + 'Result').html('<h1><span>&#10003;</span>  ' + word + ' is a' + (type == "anagram" ? 'n ' : ' ') + type + (type == "anagram" ? ' of ' + comparison : ' ') + '</h1>');
      }
      else
      {
        $('#' + type + 'Result').html('<h1><span>&#10539;</span>  ' + word + ' is not a'+ (type == "anagram" ? 'n ' : ' ') + type + (type == "anagram" ? ' of ' + comparison : ' ') +'</h1>');
      }
    },
    error: function(xhr, textStatus, errorThrown)
    {
      alert('AjaxRequest Failed');
    }
   })
}



