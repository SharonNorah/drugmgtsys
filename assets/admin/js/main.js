$(document).ready(function() {

    var maxField = 100; //Input fields increment limitation
    var addButton = $('.add-more'); //Add button selector
    var wrapper = $('.before-add-more'); //Input field wrapper
    var fieldHTML = $(".copy").html();
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

    
})( jQuery );
