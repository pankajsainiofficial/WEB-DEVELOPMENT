// $(document).ready(function(){
//     filter_data();
//     function filter_data(){
//         // $('.mob-detail').html('<div id="loading" style=""></div>'); 
//         var action = 'fetch_data';
//         var brand = get_filter('Brand'); 
//         $.ajax({
//             url: "compare.php",
//             method: "POST",
//             data:(action : action, brand : brand),
//             success:function(data){
//                 console.log(data);
//             }
//         })
//     }
//     function get_filter(class_name){
//         var filterdata = [];
//         $('.'+class_name+':checked').each(function(){
//             filter.push($(this).val());
//         });
//         return filterdata;
//     })