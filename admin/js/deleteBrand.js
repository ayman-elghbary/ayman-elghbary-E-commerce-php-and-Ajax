$(".modaldeletebrand").click(function () {
    var id=$(this).attr('data-id');
    $(".confirmdeletebrand").click(function () {
        // console.log('test');

     $.post("function/deletebrand.php",{id},function (data) {
         console.log(data);
         location.reload();
        })   
    })
})