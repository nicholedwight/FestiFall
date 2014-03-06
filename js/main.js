$(document).ready(function() {

  $('#lineup img').mouseenter(function() {

    var name = $(this).attr('id')

    // Assign handlers immediately after making the request,
    // and remember the jqXHR object for this request
    var jqxhr = $.ajax("bibliography.php?name=" + name)
      .done(function(data) {
        console.log( data );
      })
      .fail(function() {
        alert( "error" );
      });
  });
});


$('#lineup img').qtip({
content: {
text: function(event, api) {
    var name = $(this).attr('id');
    $.ajax({
        url: "bibliography.php?name=" + name // Use data-url attribute for the URL
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
}
});
