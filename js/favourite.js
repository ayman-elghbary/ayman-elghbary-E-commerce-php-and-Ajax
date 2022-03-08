$('.favourite').click(function () {
  
    $.post('function_bou/doFavourite.php',{
        userid:$(this).parent().parent().find('.userrr').val(),
        proid:$(this).attr('data-id'),
        

    },function (data) {
        console.log(data);
    })
});
/////////////////////////////////////////////////////////////////
