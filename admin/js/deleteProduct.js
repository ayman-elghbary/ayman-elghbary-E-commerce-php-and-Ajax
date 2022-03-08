$(".modaldeleteproduct").click(function () {
    var id=$(this).attr('data-id');
    $(".confirmdeleteproduct").click(function () {
        // console.log('test');

     $.post("function/deleteproduct.php",{id},function (data) {
         console.log(data);
         location.reload();
        })   
    })
})