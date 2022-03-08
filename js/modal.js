
// get data from php by Juson & for loop
// $('.modelproduct').click(function  () {
//         var id=$(this).attr('data-id');
//         console.log(id);

//         $.ajax({

//             type: "POST",     // We want to use POST when we request our PHP file
//             url : "function_bou/modal.php",
//             data : { proid:$(this).attr('data-id') },    // passing an array to the PHP file with the param,  value you passed, this could just be a single value i.e. data: your_param
//             cache: false,       // disable the cache optional
//             dataType: 'JSON',
//             // Success callback if the PHP executed  
//             success: function(data) {
//                 //  console.log(data);
//                 // console.log(data);
            
//                for (let i = 0; i < data.length; i++) {
//                    const object = data[i];
//                    $('.nameheader').html(object.username);
//                }


//             }
   
//         });

//     })

/////////////////////////////////////////////////////////
// get data from php by Juson & object
$('.modelproduct').click(function  () {
    var id=$(this).attr('data-id');
    console.log(id);

    $.ajax({

        type: "POST",     // We want to use POST when we request our PHP file
        url : "function_bou/modal.php",
        data : { proid:$(this).attr('data-id') },    // passing an array to the PHP file with the param,  value you passed, this could just be a single value i.e. data: your_param
        cache: false,       // disable the cache optional
        dataType: 'JSON',
        // Success callback if the PHP executed  
        success: function(data) {
             // do somethig - i.e. update your modal with the returned data object
            //  console.log(data);
            // console.log(data);
            // var dataa = data.split(",");
        console.log(data[0].pic);
        $('.nameheader').html(data[0].name);
        $('.priceheader').html(data[0].price);
        $('.descriptionheader').html(data[0].description);
                //change by css 
        // $('.coverheader').css('background','url(admin/incloude/image/'+data[0].pic+')');
        $('.coverheader').attr('src','admin/incloude/image/'+data[0].pic+'');
        $('.coverheader').attr('title',data[0].name);

                //change the attr href
        // $('.coverheader').attr('href', 'admin/incloude/image/'+data[0].pic+'')
        //change by attr style
        // $('.coverheader').attr('style','background:url(admin/incloude/image/'+data[0].pic+')');




             
       


        }

    });

})