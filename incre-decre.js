$(document).ready(function(){

    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);
    
              
                // Increment

        });

        $('.quantity-add').click(function(e){
            e.preventDefault();
            
        });
    
         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
          
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });


        var children=0;
       $('.children-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var children = parseInt($('#children').val());
            
            // If is not undefined
                
                $('#children').val(children + 1);
    
              
                // Increment
            
        });
    
         $('.children-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var children = parseInt($('#children').val());
            
            // If is not undefined
          
                // Increment
                if(children>0){
                $('#children').val(children - 1);
                }
        });
        
    });