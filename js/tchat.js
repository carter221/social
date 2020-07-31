$(document).ready(function()
{
    recupmessage();

$('#send').click(function(){
   var message = $('#message').val();

   if(message != '')
   {
       $.post('ajax/post.php',{message:message},function(){
           recupmessage();
           $('#message').val('');
       })
   }
})


function recupmessage(){
    $.post('ajax/recup.php',function(data){
        $('.card-body').html(data);
    });
}

 setInterval(recupmessage,1000);

});