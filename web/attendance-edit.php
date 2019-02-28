<?php require_once "web/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
    <div>
    <?php 
        $attendance_timestamp = strtotime($attendance_date);
        $attendance_date = date("m-d-Y", $attendance_timestamp);
    ?>
        <input name="attendance_date" id="attendance_date" class="demoInputBox" disabled value="<?php echo $attendance_date; ?>"> 
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>Student</strong></th>
                    <th><strong>Present</strong></th>
                    <th><strong>Absent</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php 
            if (! empty($studentResult)) {
                foreach ($studentResult as $k => $v) {
                    $presentChecked = "";
                    $absentChecked = "";
                    
                    if($studentResult[$k]["id"] == $result[$k]["student_id"]) {
                        if($result[$k]["present"] == 1) { 
                            $presentChecked = "checked";
                        } else if($result[$k]["absent"] == 1) { 
                            $absentChecked = "checked";
                        }
                    }
            ?>
          <tr>
                    <td><input type="hidden"
            name="student_id[]" id="student_id" value = "<?php echo $studentResult[$k]["id"]; ?>">
            <?php echo $studentResult[$k]["name"]; ?></td>
                    <td><input type="radio" name="attendance-<?php echo $studentResult[$k]["id"]; ?>" value="present" <?php echo $presentChecked; ?> /></td>
                    <td><input type="radio" name="attendance-<?php echo $studentResult[$k]["id"]; ?>" value="absent" <?php echo $absentChecked; ?> /></td>
                </tr>
                    <?php
                        }
                    }
                    ?>
            <tbody>
        
        </table>
        
    </div>
   <div>
        <input type="submit" name="add" id="btnSubmit" value="Save" />
    </div> 
</form>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#attendance_date").val()) {
        $("#attendance_date-info").html("(required)");
        $("#attendance_date").css('background-color','#FFFFDF');
        valid = false;
    } 
    return valid;
}
</script>
</body>
</html>