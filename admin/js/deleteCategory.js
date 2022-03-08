$(".modaldeletecategory").click(function () {
    var id=$(this).attr('data-id');
    $(".confirmdeletecategory").click(function () {
        // console.log('test');
        
     $.post("function/deletecategory.php",{id},function (data) {
        //  console.log(data);
        //  $('.tr-'+id).remove();
        location.reload();
     })   
    })
})