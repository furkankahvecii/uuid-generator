// generate UUIDs when the page loads
$(window).load(function () {
  $(".uuid").children().click();
});

// Generate UUID
$(".uuid").click(function()
{
  var name = $(this).attr('name');
  
  $.ajax({
    url: 'http://uuid-guid-generator.herokuapp.com/uuid-ajax.php',
    type: 'GET',
    data: {uuid_version: name},
    success: function(data) 
    {
      //called when successful
      data = JSON.parse(data);
      if(data['success'] == true)
        $("input[rel='"+name+"']" ).val(data['uuid']);
  },
    error: function(e) {
    //called when there is an error
    alert("Error" + e);
    }
  });
});

// Double click to copy UUID to Clipboard
$( "input" ).dblclick(function() 
{
  copyToClipboard($(this).val());
});


function copyToClipboard(text) 
{
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val(text).select();
  document.execCommand("copy");
  $temp.remove();
}