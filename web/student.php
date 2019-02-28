<?php require_once "web/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=student-add"><img src="web/image/icon-add.png" />Add Student</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>Student Name</strong></th>
                    <th><strong>Roll Number</strong></th>
                    <th><strong>Date of Birth</strong></th>
                    <th><strong>Class</strong></th>
                    <th><strong>Action</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
          <tr>
                    <td><?php echo $result[$k]["name"]; ?></td>
                    <td><?php echo $result[$k]["roll_number"]; ?></td>
                    <td><?php echo $result[$k]["dob"]; ?></td>
                    <td><?php echo $result[$k]["class"]; ?></td>
                    <td><a class="btnEditAction"
                        href="index.php?action=student-edit&id=<?php echo $result[$k]["id"]; ?>">
                        <img src="web/image/icon-edit.png" />
                        </a>
                        <a class="btnDeleteAction" 
                        href="index.php?action=student-delete&id=<?php echo $result[$k]["id"]; ?>">
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