// Send a message to the user if values are incorrect for number of users
var $numUsers = $('#num-users');
var $errorReport = $('#error-report');
$numUsers.on('input', function() {
  var numUsersVal = $numUsers.val();
  if ($.isNumeric(numUsersVal)) {
    $('#temp').remove();
  } else if (numUsersVal == '') {
    $('#temp').remove();
    $errorReport.append("<h4 id='temp'>Please input at least one number!</h4>")
  } else {
    $('#temp').remove();
    $errorReport.append("<h4 id='temp'>Please only input numbers!</h4>");
  }
});
