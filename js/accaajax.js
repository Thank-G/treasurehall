$(document).ready(function () {
    let regnumber_state = 0;

    $("#regnumber").on("blur", function () {
        let regnumber = $("#regnumber").val();
        if (regnumber == "") {
            regnumber_state = "";
            return;
        }
        $.ajax({
            url: "acca-form.php",
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
        let nysccode = $("#nysccode").val();
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
        let appliedknowledge = [];
            $(".appliedknowledges").each(function () {
                if ($(this).is(":checked")) {
                    appliedknowledge.push($(this).val());
                }
            });
            appliedknowledge = appliedknowledge.toString();
        let appliedskills = [];
            $(".appliedskills").each(function () {
                if ($(this).is(":checked")) {
                    appliedskills.push($(this).val());
                }
            });
            appliedskills = appliedskills.toString();
        let strategicprof = [];
            $(".strategicprof").each(function () {
                if ($(this).is(":checked")) {
                    strategicprof.push($(this).val());
                }
            });
            strategicprof = strategicprof.toString();
        let appliedknowledgecount = $(".appliedknowledgecount").text();
        let appliedskillscount = $(".appliedskillscount").text();
        let strategicprofcount = $(".strategicprofcount").text();
        let totalcount = $(".totalcount").text();
        let appliedknowledgeamount = $(".appliedknowledgeamount").text();
        let appliedskillsamount = $(".appliedskillsamount").text();
        let strategicprofamount = $(".strategicprofamount").text();
        let totalamount = $(".totalamount").text();
        let howdidyouknow = $("[name=howdidyouknow]:checked").val();
        

        if (regnumber_state == "") {
            $("#error_msg").text("Please fill up the fields in the form before registering");
        } else {
            // proceed with form submission
            $.ajax({
                url: "acca-form.php",
                type: "post",
                data: {
                    save: 1,
                    firstname: firstname,
                    lastname: lastname,
                    regnumber: regnumber,
                    nysccode: nysccode,
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
                    appliedknowledge: appliedknowledge,
                   appliedskills:appliedskills,
                    strategicprof: strategicprof,
                    appliedknowledgecount: appliedknowledgecount,
                   appliedskillscount:appliedskillscount,
                    strategicprofcount: strategicprofcount,
                    totalcount: totalcount,
                    appliedknowledgeamount: appliedknowledgeamount,
                   appliedskillsamount:appliedskillsamount,
                    strategicprofamount: strategicprofamount,
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