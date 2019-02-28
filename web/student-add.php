<?php require_once "web/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Name</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="name" id="name" class="demoInputBox">
    </div>
    <div>
        <label>Roll Number</label> <span id="roll-number-info"
            class="info"></span><br /> <input type="text"
            name="roll_number" id="roll_number" class="demoInputBox">
    </div>
    <div>
        <label>Date of Birth</label> <span id="dob-info" class="info"></span><br />
        <input type="date" name="dob" id="dob" class="demoInputBox">
    </div>
    <div>
        <label>Class</label> <span id="class-info" class="info"></span><br />
        <input type="text" name="class" id="class" class="demoInputBox">
    </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Add" />
    </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#name").val()) {
        $("#name-info").html("(required)");
        $("#name").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#roll_number").val()) {
        $("#roll-number-info").html("(required)");
        $("#roll_number").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#dob").val()) {
        $("#dob-info").html("(required)");
        $("#dob").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#class").val()) {
        $("#class-info").html("(required)");
        $("#class").css('background-color','#FFFFDF');
        valid = false;
    }   
    return valid;
}
</script>
</body>
</html>