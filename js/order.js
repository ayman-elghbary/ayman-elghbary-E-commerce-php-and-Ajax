var TotalItemPrice=0;
// function UpdateTotalPrice(price)
// {
//     this.TotalItemPrice +=price;
//     console.log(TotalItemPrice);
//     $('#totalPrice1')[0].append(TotalItemPrice + "$");
//     $('#totalPrice2')[0].append(TotalItemPrice + "$");
// }   
$('.incresleft').click(function () {
    var quantity=$(this).parent().next().val();
    
var quantitynum=Number(quantity);
var price=$(this).parent().parent().parent().parent().parent().find('.price').html();
var pricenum=Number(price);
    // console.log(quantitynum);
    // console.log(pricenum);
   $(this).parent().parent().find('.quantity1').val(quantitynum -1);
   $(this).parent().parent().parent().parent().parent().find('.totall').html(pricenum * (quantitynum -1));
    $.post('function_bou/upOrderCart.php',{
        userid:$(this).parent().parent().find('.userr').val(),
        proid:$(this).attr('data-id'),
        num : quantitynum

    },function (data) {
        // console.log(data);
    });
    // UpdateTotalPrice(-(pricenum * (quantitynum -1)));
});
/////////////////////////////////
$('.incresright').click(function () {
    var quantity=$(this).parent().prev().val();
    // console.log(quantity);
var quantitynum=Number(quantity);
var price=$(this).parent().parent().parent().parent().parent().find('.price').html();
var pricenum=Number(price);
    // console.log(quantitynum);
    // console.log(pricenum);
   $(this).parent().parent().find('.quantity1').val(quantitynum +1);
   $(this).parent().parent().parent().parent().parent().find('.totall').html(pricenum * (quantitynum +1));
    $.post('function_bou/lessOrderCart.php',{
        userid:$(this).parent().parent().find('.userr').val(),
        proid:$(this).attr('data-id'),
        num : quantitynum

    },function (data) {
        // console.log(data);
    });
    // UpdateTotalPrice((pricenum * (quantitynum -1)));
});
$('.remo').click(function(){
    var proid = $(this).attr('data-id');
    var userid=$(this).parent().parent().find('.userr').val();
    $.post('function_bou/deleteOrderCart.php',{
        userid:$(this).parent().parent().find('.userr').val(),
        proid:$(this).attr('data-id'),
        
    },function (data) {
        console.log(data);
        location.reload();

    })
   
});