$(document).ready(function() {


    /*----------Function To Disable The Similar Drop Location--------------*/
    $("#pickup").change(function() {
        if (this.val != "") {

            var drop = $(this).val();

            $("#drop option[value='" + drop + "']").attr("disabled", "disabled").siblings().removeAttr("disabled");
        }
    });

    /*----------Function To Disable The Similar Pickup Location--------------*/
    $("#drop").change(function() {
        if (this.val != "") {
            var pick = $(this).val();

            $("#pickup option[value='" + pick + "']").attr("disabled", "disabled").siblings().removeAttr("disabled");
        }
    });

    /*-----------Function To Validate The Input In The Weigth Field------------*/
    $("#weight").keyup(function() {
        var w = $("#weight").val();
        if (isNaN(w) == true) {
            $("#demo").html("Please Make Sure To Enter An Integer Value");
            $('#myModal').modal('show');
            $("#submit").attr('disabled', 'disabled');
        } else {
            $("#submit").removeAttr("disabled");
        }
    });

    /*----------Function To Set Lugage To Zero When CedMicro Is Selected---------*/
    $('#cabtype').change(function() {
        if ($(this).val() == 'CedMicro') {
            $('#weight').prop("disabled", true);
            $('#weight').val("0");
        } else {
            $('#weight').prop("disabled", false);
            $('#weight').val("");
            $('#weight').attr("placeholder", "Enter the weight in kg");
        }
    });

    $("#btnpass").click(function() {
        $("#changepassword").css({ "display": "block" });
        $("#changenumber").css({ "display": "none" });
        $("#changename").css({ "display": "none" });
    });

    $("#btnnum").click(function() {
        $("#changepassword").css({ "display": "none" });
        $("#changenumber").css({ "display": "block" });
        $("#changename").css({ "display": "none" });
    });
    $("#btnname").click(function() {
        $("#changepassword").css({ "display": "none" });
        $("#changenumber").css({ "display": "none" });
        $("#changename").css({ "display": "block" });
    });




});