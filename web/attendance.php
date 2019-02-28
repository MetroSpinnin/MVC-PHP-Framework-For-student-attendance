<?php require_once "web/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=attendance-add"><img src="web/image/icon-add.png" />Add Attendance</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1" class="attendance_table">
            <thead>
                <tr>
                    <th><strong>Date</strong></th>
                    <th><strong>Present</strong></th>
                    <th><strong>Absent</strong></th>
                    <th><strong>Action</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
          <tr>
                    <td><?php 
                    $attendance_date = "";
                    if(!empty($result[$k]["attendance_date"])) {
                        $attendance_timestamp = strtotime($result[$k]["attendance_date"]);
                        $attendance_date = date("m-d-Y", $attendance_timestamp);
                    }
                    echo $attendance_date; ?></td>
                    <td><?php echo $result[$k]["present"]; ?></td>
                    <td><?php echo $result[$k]["absent"]; ?></td>
                    <td><a class="btnEditAction"
                        href="index.php?action=attendance-edit&date=<?php echo $result[$k]["attendance_date"]; ?>">
                        <img src="web/image/icon-edit.png" />
                        </a>
                        <a class="btnDeleteAction" 
                        href="index.php?action=attendance-delete&date=<?php echo $result[$k]["attendance_date"]; ?>">
                        <img src="web/image/icon-delete.png" />
                        </a>
                    </td>
                </tr>
                    <?php
                        }
                    }
                    ?>
                
            
            
            <tbody>
        
        </table>
    </div>
</body>
</html>