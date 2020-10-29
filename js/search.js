// check page connection 
// console.log('conected with php page');
const search=()=>{    
    console.log('search connected')
}
//Jquery
$(document).ready(function(){
   console.log('Successfully jquery Connect');
   $(".item_no").on('change', function search(){
    var searchvalue = $(this).val(); // this.value
    $.ajax({ 
        url: 'item_action.php',
        data: { searchvalue: searchvalue },
        type: 'post'
        
    }).done(function(responseData) {
        console.log('Done: ', responseData);
    }).fail(function() {
        console.log('Failed');
    });
});
});