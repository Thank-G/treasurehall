$(document).ready(function () {
    let regnumber_state = 0;

    $("#regnumber").on("blur", function () {
        let regnumber = $("#regnumber").val();
        if (regnumber == "") {
            regnumber_state = "";
            return;
        }
        $.ajax({
            url: "citn-form.php",
            type: "post",
            data: {
                regnumber_check: 1,
                regnumber: regnumber
            },
            success: function (response) {
                if (response == "new") {    
                    regnumber_state = 1;
                    $("#regnumber").parent().addClass("form_success");
                    $("#regnumber").siblings("span").text("welcome! new student");
                } else if (response == "returning") {
                    regnumber_state = 1;
                    $("#regnumber").parent().addClass("form_success");
                    $("#regnumber").siblings("span").text("welcome back! returning student");
                }
            }
        });
    });

    $("#register").click(function (e) {
        e.preventDefault();
        let firstname = $("#firstname").val();
        let lastname = $("#lastname").val();
        let regnumber = $("#regnumber").val();
        let nyscgmcode = $("#nyscgmcode").val();
        let options = $("[name=options]:checked").val();
        let gender = $("[name=gender]:checked").val();
        let status = $("[name=status]:checked").val();
        let phonenumber = $("#phonenumber").val();
        let phonenumber2 = $("#phonenumber2").val();
        let sponsor = $("#sponsor").val();
        let employer = $("#employer").val();
        let homeaddress = $("#homeaddress").val();
        let email = $("#email").val();
        let qualifications = $("#qualifications").val();
        let foundation = [];
            $(".foundations").each(function () {
                if ($(this).is(":checked")) {
                    foundation.push($(this).val());
                }
            });
            foundation = foundation.toString();
        let proftaxi = [];
            $(".proftaxi").each(function () {
                if ($(this).is(":checked")) {
                    proftaxi.push($(this).val());
                }
            });
            proftaxi = proftaxi.toString();
        let proftaxii = [];
            $(".proftaxii").each(function () {
                if ($(this).is(":checked")) {
                    proftaxii.push($(this).val());
                }
            });
            proftaxii = proftaxii.toString();
        let foundationcount = $(".foundationcount").text();
        let proftaxicount = $(".proftaxicount").text();
        let proftaxiicount = $(".proftaxiicount").text();
        let totalcount = $(".totalcount").text();
        let foundationamount = $(".foundationamount").text();
        let proftaxiamount = $(".proftaxiamount").text();
        let proftaxiiamount = $(".proftaxiiamount").text();
        let totalamount = $(".totalamount").text();
        let howdidyouknow = $("[name=howdidyouknow]:checked").val();
        

        if (regnumber_state == "") {
            $("#error_msg").text("Please fill up the fields in the form before registering");
        } else {
            // proceed with form submission
            $.ajax({
                url: "citn-form.php",
                type: "post",
                data: {
                    save: 1,
                    firstname: firstname,
                    lastname: lastname,
                    regnumber: regnumber,
                    nyscgmcode: nyscgmcode,
                    options: options,
                    gender: gender,
                    status: status,
                    phonenumber: phonenumber,
                    phonenumber2: phonenumber2,
                    sponsor: sponsor,
                    employer: employer,
                    homeaddress: homeaddress,
                    email: email,
                    qualifications: qualifications,
                    foundation: foundation,
                    proftaxi: proftaxi,
                    proftaxii: proftaxii,
                    foundationcount: foundationcount,
                    proftaxicount: proftaxicount,
                    proftaxiicount: proftaxiicount,
                    totalcount: totalcount,
                    foundationamount: foundationamount,
                    proftaxiamount: proftaxiamount,
                    proftaxiiamount: proftaxiiamount,
                    totalamount: totalamount,
                    howdidyouknow: howdidyouknow,
                },
                success: function (response) {
                    alert(response);
                    location.reload();
                }
            });
        }
    });
});