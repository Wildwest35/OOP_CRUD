<?php
    session_start();
    if(isset($_SESSION['userid'])) {
        $data = $_POST['data'];
?>
        <table class="food-top">
            <tr>
                <th>Username</th>
                <th>Afm</th>
                <th>Amka</th>
                <th>ID Card</th>
                <th class="icon-table-size">Info</th>
                <th class="icon-table-size">Edit</th>
                <th class="icon-table-size">Delete</th>
            </tr>
            <?php
                foreach($data as $value) {
            ?>
                    <tr>
                        <td><?php echo $value["users_uid"]; ?></td>
                        <td><?php echo $value["info_afm"]; ?></td>
                        <td><?php echo $value["info_amka"]; ?></td>
                        <td><?php echo $value["info_idcard"]; ?></td>
                        <td class="icon-table-size"><img src="./images/eye.png" alt="edit" width="40" height="40" id="info" value="<?php echo $value["info_id"]; ?>"></td>
                        <td class="icon-table-size"><img src="./images/edit.png" alt="edit" width="40" height="40" id="edit" value="<?php echo $value["info_id"]; ?>"></td>
                        <td class="icon-table-size"><img src="./images/delete.png" alt="delete" width="40" height="40" id="del" value="<?php echo $value["info_id"]; ?>"/></td>
                    </tr>
            <?php
                }
            ?>
        </table>
<?php
    }
?>