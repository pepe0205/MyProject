$(document).ready(function () {
    $('.btn-searching').click(function (e) { 
        e.preventDefault();
         var nameSP = $('.input-searching').val();
      
         $.ajax({
            type: 'post',
            url: '../../public/EditDB/searchresult.php',
            data: {
                productName:nameSP,
            },
                
            
            success: function (response) {
                
                window.location.replace("http://localhost:88/ProjectWeb/Search/SayHi/"+nameSP);
                if(response == "found") {
                  
                } else {
                    
                    $('.search-result').hide();
                    //$('#shoppe-search-result').css("display","block");
                   // $('.shopee-search-empty-result-section').css("display","block");    
                    
                }
            }
        });
        
   
        //  
       	
    });
});