

$(document).ready(function () {
    $("input[name=payment_type]:radio").change(function () {
        if($("input[name=payment_type]:checked").val()=='Transfer Funds') {
            $("#transfer").css("display", "block");
            $("#grant").css("display", "none");
            $(".fund").attr("required","");
            $("#grant_field").removeAttr("required");
        } else if($("input[name=payment_type]:checked").val()=='Grant')  {
            $("#transfer").css("display", "none");
            $("#grant").css("display", "block");
            $("#grant_field").attr("required","");
            $(".fund").removeAttr("required");
        } else {
            $("#transfer").css("display", "none");
            $("#grant").css("display", "none");
            $(".fund").removeAttr("required");
            $("#grant_field").removeAttr("required");
        }


    });
    // alert("this");
});

$(document).ready(function () {
    $("input[name=media_type]:radio").change(function () {
        if($("input[name=media_type]:checked").val()=='Starting New Page') {
            $("#new_page").css("display", "block");
            $("#post").css("display", "none");
            // $(".fund").attr("required","");
            // $("#grant_field").removeAttr("required");
        // } else if($("input[name=media_type]:checked").val()=='Grant')  {
        //     $("#transfer").css("display", "none");
        //     $("#grant").css("display", "block");
        //     $("#grant_field").attr("required","");
        //     $(".fund").removeAttr("required");
        } else {
            $("#new_page").css("display", "none");
            $("#post").css("display", "block");
        }


    });
    // alert("this");
});


$(document).ready(function () {
    $("input[class=promotional]:checkbox").change(function () {

        $("#pickup").css("display", "block");
        // alert('this');

    });

});


$(document).ready(function () {
    $("input[name=other]:checkbox").change(function () {

        $("#other_details").css("display", "block");
        // alert('this');

    });

});

$(document).ready(function () {
    $("input[name=GHC]:radio").change(function () {
        if($("input[name=GHC]:checked").val()==1) {
            $("#GHC").css("display", "block");
            // $("#post").css("display", "none");
            // $(".fund").attr("required","");
            // $("#grant_field").removeAttr("required");
            // } else if($("input[name=media_type]:checked").val()=='Grant')  {
            //     $("#transfer").css("display", "none");
            //     $("#grant").css("display", "block");
            //     $("#grant_field").attr("required","");
            //     $(".fund").removeAttr("required");
        } else {
            $("#GHC").css("display", "none");
            // $("#post").css("display", "block");
        }


    });
    // alert("this");
});

