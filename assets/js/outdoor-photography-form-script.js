$("#outdoorPhotographyForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var event = $("#event").val();
    var eventDate = $("#eventDate").val();
    var eventTime = $("#eventTime").val();
    var duration = $("#duration").val();
    var location = $("#location").val();

    var services = [];
    $(".services-value").each(function(){
        if($(this).is(":checked")) {
            services.push($(this).val());
        }
    });

    services = services.toString();

    var anyOtherInformation = $("#anyOtherInformation").val();
    var canvasPrint = $("#canvasPrint").val();




    $.ajax({
        type: "POST",
        url: "../../../assets/php/outdoor-photography-form-process.php",
        data: "name=" + name + "&email=" + email + "&phone=" + phone + "&event=" + event + "&eventDate=" + eventDate + "&eventTime=" + eventTime + "&duration=" + duration + "&location=" + location + "&services=" + services + "&anyOtherInformation=" + anyOtherInformation + "&canvasPrint=" + canvasPrint,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#outdoorPhotographyForm")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError(){
    $("#outdoorPhotographyForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}