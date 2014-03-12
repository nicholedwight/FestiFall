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

    return 'Loading...'; 
    }
  },
position: {
      target: 'mouse' //Loads the popup biography info wherever the mouse is over the iamge
  }

});
