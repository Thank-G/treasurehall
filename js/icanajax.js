$(document).ready(function () {
    let regnumber_state = 0;

    $("#regnumber").on("blur", function () {
        let regnumber = $("#regnumber").val();
        if (regnumber == "") {
            regnumber_state = "";
            return;
        }
        $.ajax({
            url: "ican-form.php",
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
        let skills = [];
            $(".skills").each(function () {
                if ($(this).is(":checked")) {
                    skills.push($(this).val());
                }
            });
            skills = skills.toString();
        let professional = [];
            $(".professionals").each(function () {
                if ($(this).is(":checked")) {
                    professional.push($(this).val());
                }
            });
            professional = professional.toString();
        let foundationcount = $(".foundationcount").text();
        let skillscount = $(".skillscount").text();
        let professionalcount = $(".professionalcount").text();
        let totalcount = $(".totalcount").text();
        let foundationamount = $(".foundationamount").text();
        let skillsamount = $(".skillsamount").text();
        let professionalamount = $(".professionalamount").text();
        let totalamount = $(".totalamount").text();
        let howdidyouknow = $("[name=howdidyouknow]:checked").val();
        

        if (regnumber_state == "") {
            $("#error_msg").text("Please fill up the fields in the form before registering");
        } else {
            // proceed with form submission
            $.ajax({
                url: "ican-form.php",
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
                    skills: skills,
                    professional: professional,
                    foundationcount: foundationcount,
                    skillscount: skillscount,
                    professionalcount: professionalcount,
                    totalcount: totalcount,
                    foundationamount: foundationamount,
                    skillsamount: skillsamount,
                    professionalamount: professionalamount,
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