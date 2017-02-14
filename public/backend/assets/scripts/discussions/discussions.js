/**
 * Created by dungt on 7/19/2016.
 */
/**
 * Created by dungt on 7/5/2016.
 */

$( document ).ready(function() {

/*    var sortColumn = $("#sortColumn").val();
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
    }*/

    $("#searchData").click(function () {
        var name = $("#formSearch input[name=name]").val();
        var title = $("#formSearch input[name=title]").val();
        var startdate = $("#formSearch input[name=startdate]").val();
        var enddate = $("#formSearch input[name=enddate]").val();

        var page = $("#urlPage").val();

       /* var sortColumn = $("#sortColumn").val();
        var orderColumn = $("#orderColumn").val();*/

        var getUrlPage = $("#getUrlPage").val();

        var url = "";
        var status = false;


       /* if ( sortColumn.trim() !== "" ){
            url += "&sort="+sortColumn;
        }

        if ( orderColumn.trim() !== "" ){
            url += "&order="+orderColumn;
        }*/

        if ( page.trim() !== ''){
            url += "?page="+page;
        }
        if ( name.trim() !== "" ){
            url += "&name="+name;
            status = true;
        }
        if ( title.trim() !== "" ){
            url += "&title="+title;
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
        }else{
            window.location.href = getUrlPage + url;
        }
        return false;
    });

  /*  //Check active
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
    })*/


});

