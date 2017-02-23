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

/**
 * Created by dungt on 7/5/2016.
 */

$( document ).ready(function() {
    /*$(".table tbody tr").click(function () {
        if ( $(this).hasClass("tableA") ){
            $(this).find("td input[type=checkbox]").prop('checked' , false);
            $(this).removeClass('tableA');
        }else{
            $(this).find("td input[type=checkbox]").prop('checked' , true);
            $(this).addClass('tableA');
        }
    })*/

   /* $("#selectPagin").change(function () {
        var valuePagin = $(this).val();
        var url = $("#getListAdmin").val();
        window.location.href = url + "&pagin="+valuePagin;
    })*/
    var sortColumn = $("#sortColumn").val();
    var orderColumn = $("#orderColumn").val();

    if ( sortColumn.trim() !== 'id'  ){
        if ( orderColumn.trim() === 'asc' ){
            $(".sort_"+sortColumn).removeClass("fa fa-sort");
            $(".sort_"+sortColumn).addClass("fa fa-sort-asc");
        }
        else if ( orderColumn.trim() === 'desc' ){
            $(".sort_"+sortColumn).removeClass("fa fa-sort");
            $(".sort_"+sortColumn).addClass("fa fa-sort-desc ");
        }
    }

    $("#searchData").click(function () {
        var name = $("#formSearch input[name=name]").val();
        var email = $("#formSearch input[name=email]").val();
        var startdate = $("#formSearch input[name=startdate]").val();
        var enddate = $("#formSearch input[name=enddate]").val();

        var sortColumn = $("#sortColumn").val();
        var orderColumn = $("#orderColumn").val();

        var getUrlPage = $("#getUrlPage").val();

        var url = "";
        var status = false;

        if ( sortColumn.trim() !== "" ){
            url += "&sort="+sortColumn;
        }

        if ( orderColumn.trim() !== "" ){
            url += "&order="+orderColumn;
        }

        if ( name.trim() !== "" ){
            url += "&name="+name;
            status = true;
        }
        if ( email.trim() !== "" ){
            url += "&email="+email;
            status = true;
        }
        if ( startdate.trim() !== "" ){
            url += "&startdate="+startdate;
            status = true;
        }
        if ( enddate.trim() !== "" ){
            url += "&enddate="+enddate;
        }
        if ( status ){
            window.location.href = getUrlPage + "?" + url;
        }
        return false;
    });

    //Check active
    $(".checkActive").click(function () {
        var id = $(this).attr("data-id");
        var active = 0;
        var value = $(this).attr("value-id");
        var url = $("#urlChangeStatus").val();
        var objectThis = $(this);
        if ( value !== "0" ) {
            if ( $(this).is(":checked") ) {
                active = 2;
            } else {
                active = 1;
            }
            $.ajax({
                type : "POST",
                url : url,
                data : { 'id' : id , 'active' : active },
                dataType: 'json',
                success: function(data){
                    if ( data.active == 2 ){
                        objectThis.prev().empty();
                        objectThis.prev().text("Active");
                    }
                    if ( data.active == 1 ){
                        objectThis.prev().empty();
                        objectThis.prev().text("Non-Active");
                    }
                },
                error: function(data){
                }
            });
        }else {
            return false;
        }
    });

    //edit user
    $(".editButton").click(function () {
        var url = $("#urlEditUser").val();
        var id = $(this).attr('data-id');
        window.location.href = url + "?id="+id;
    });

    $(".deleteButton").click(function () {
        if ( confirm( "Are you sure delete" ) ){
            var url = $("#urlDeleteUser").val();
            var id = $(this).attr('data-id');
            window.location.href = url + "?id="+id;
        }else{
            return false;
        }
    });
    
    $(".changePass").click(function () {
        var url = $("#urlChangePass").val();
        var id = $(this).attr('data-id');
        var url_href = url + "?id="+id;
        window.location.href = url_href;
    })


});