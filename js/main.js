$(document).ready(function() {

  $('#lineup img').mouseenter(function() {

    var name = $(this).attr('id')

    // Assign handlers immediately after making the request,
    // and remember the jqXHR object for this request
    var jqxhr = $.ajax("bibliography.php?name=" + name)//This is the query string to tie in the php file.
      .done(function(data) {
      })
      .fail(function() {
        alert( "error" );
      });
  });
});

//Qtip library downloaded from http://qtip2.com
$('#lineup img').qtip({
content: {
text: function(event, api) {
    var name = $(this).attr('id');
    $.ajax({
        url: "bibliography.php?name=" + name
    })
    .then(function(content) {
        // Set the tooltip content upon successful retrieval
        api.set('content.text', content);
    }, function(xhr, status, error) {
        // Upon failure... set the tooltip content to the status and error value
        api.set('content.text', status + ': ' + error);
    });

    return 'Loading...'; // Set some initial text
    }
  },
position: {
      target: 'mouse' //Loads the popup biography info wherever the mouse is over the iamge
  }

});
