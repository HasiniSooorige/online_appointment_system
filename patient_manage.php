<?php
//include database
include './actions/dbConnection.php';
//search query
$query = "select * from patient";
$result = $conn->query($query);
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--link css file-->
        <link type="text/css" rel="stylesheet" href="patient_manage.css"/>
    </head>
    <body class="b2">
        <!--include header-->
        <?php
        include './header.php';
        ?>
        <!--create div & table-->
        <div class="d4">
            <table border="0" class="t5" >
                <thead>
                    <tr>
                        <th class="th">Register Number</th>
                        <th class="th">Full Name</th>
                        <th class="th">Birthday</th>
                        <th class="th">Age</th>
                        <th class="th">Gender</th>
                        <th class="th">Contact Number</th>
                        <th class="th">E-mail</th>
                        <th class="th">Address</th>
                        <th class="th">City</th>
                        <th class="th">Register Date</th>
                        <th class="th">Blood Group</th>
                        <th class="th">Chronic</th>
                        <th class="th">Allergy</th>
                        <th class="th">Status</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                <form method="post" action="actions/patient_update.php" >
                            <tr>
                                <td class="td3 td4"><?php echo $row['id_patient']; ?></td>
                                <td class="td4"><input class="td3" type="text" name="full_name" value="<?php echo $row['full_name']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="birthday" value="<?php echo $row['birthday']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="age" value="<?php echo $row['age']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="gender" value="<?php echo $row['gender']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>"></td> 
                                <td class="td4"><input class="td3" type="text" name="e_mail" value="<?php echo $row['e_mail']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="address" value="<?php echo $row['address']; ?>"></td>
                                <td  class="td4"><input class="td3" type="text" name="city" value="<?php echo $row['city']; ?>"></td>
                                <td  class="td4"><input class="td3" type="text" name="reg_date" value="<?php echo $row['reg_date']; ?>"></td>
                                <td  class="td4"><input class="td3" type="text" name="blood_grp" value="<?php echo $row['blood_grp']; ?>"></td>
                                <td  class="td4"><input class="td3" type="text" name="chronic" value="<?php echo $row['chronic']; ?>"></td>
                                <td  class="td4"><input class="td3" type="text" name="allergy" value="<?php echo $row['allergy']; ?>"></td>
                                <td  class="td4"><select  class="td3" name="is_active">
                                        <option class="td3" <?php
                                        if ($row['is_active'] == 1) {
                                            echo "selected";
                                        }
                                        ?>  value="1">Yes</option>
                                        <option class="td3" <?php
                                        if ($row['is_active'] == 0) {
                                            echo "selected";
                                        }
                                        ?> value="0">No</option>
                                        <a href="actions/patient_delete.php"></a>
                                    </select></td>
                                <td class="td4">
                                    <input type="hidden" name="id_patient" value="<?php echo $row['id_patient']; ?>" /> 
                                    <input align="left" type="submit" value="Update" />
                                    </br></br>
                                    <a href="actions/patient_delete.php?id=<?php echo $row['id_patient']; ?>">Delete</a></td>
                            </tr>
                        </form>
                        <?php
                    }
                }

                $conn->close();
                ?>
                </tbody>
            </table>
            <hr style="background-color: #009999">
        </div>
        <!--include footer-->
<?php
include './footer.php';
?>
    </body>
</html>
