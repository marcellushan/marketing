$(document).ready(function () {
    $("input[name=pmtType]:radio").change(function () {
        if($("input[name=pmtType]:checked").val()=='Transfer Funds') {
            $("#transfer").css("display", "block");
            $("#grant").css("display", "none");
            $(".fund").attr("required","");
            $("#grant_field").removeAttr("required");
        } else if($("input[name=pmtType]:checked").val()=='Grant')  {
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
});
     
     var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
     function Validate(oForm) {
         var arrInputs = oForm.getElementsByTagName("input");
         for (var i = 0; i < arrInputs.length; i++) {
             var oInput = arrInputs[i];
             if (oInput.type == "file") {
                 var sFileName = oInput.value;
                 if (sFileName.length > 0) {
                     var blnValid = false;
                     for (var j = 0; j < _validFileExtensions.length; j++) {
                         var sCurExtension = _validFileExtensions[j];
                         if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                             blnValid = true;
                             break;
                         }
                     }
                     
                     if (!blnValid) {
                         alert("Sorry, the only allowed extensions are: " + _validFileExtensions.join(", "));
                         return false;
                     }
                 }
             }
         }
       
         return true;
     }