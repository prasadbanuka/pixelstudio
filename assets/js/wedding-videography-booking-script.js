$("#wedding-videography-booking-form").validator().on("submit", function (event) {
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
    var eventLocation = $("#eventLocation").val();
    var numberGuests = $("#numberGuests").val();
    var food = $("#food").val();
    var services = $("#services").val();
    var anyOtherInformation = $("#anyOtherInformation").val();
    var bestPersonToContact = $("#bestPersonToContact").val();
    var canvasPrint = $("#canvasPrint").val();
    var howKnow = $("#howKnow").val();

    $.ajax({
        type: "POST",
        url: "../../../assets/php/wedding-booking-form-process.php",
        data: "name=" + name + "&email=" + email + "&phone=" + phone + "&event=" + event + "&eventDate=" + eventDate + "&eventTime=" + eventTime+ "&duration=" + duration + "&eventLocation=" + eventLocation + "&numberGuests=" + numberGuests + "&food=" + food + "&services=" + services + "&anyOtherInformation=" + anyOtherInformation + "&bestPersonToContact=" + bestPersonToContact + "&canvasPrint=" + canvasPrint + "&howKnow=" + howKnow,
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
    $("#wedding-videography-booking-form")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError(){
    $("#wedding-videography-booking-form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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