$( document ).ready(function() {
    
    // add Dynamic câu hỏi
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var inputs          = $("#list_answer").find($("input[type=text]"));
    var max_fields      = 6 - inputs.length; //maximum input boxes allowed
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="col-md-12 form-group"><div class="col-md-2"><label>Answer '+ (x-1) +':</label></div><div class="col-md-7"><input type="text" class="form-control" name="list_answer[]"/></div><div class="col-md-1"><input type="radio" name="is_true" /></div><div class="col-md-2"><a href="#" class="remove_field">Remove</a></div></div>'); //add input box
            setValueRadio();
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); 
        $(this).parent('div').parent('div').remove(); x--;
        setValueRadio();
    });

    function setValueRadio(){
             var k=1;
             var i=1;
             $("#list_answer").find($("input[type=radio]")).each(function() {
                $(this).val(k);
                k++;
            }); 
            $("#list_answer").find($("label")).each(function() {
                $(this).html('Answer '+i+':');  
                i++;         
            });             
    }

   // add Dynamic câu hỏi

});