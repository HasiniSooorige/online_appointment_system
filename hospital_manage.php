<?php
//include database
include './actions/dbConnection.php';
//search query
$query = "select * from hospital";
$result = $conn->query($query);
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--link css file-->
        <link type="text/css" rel="stylesheet" href="hospital_manage.css"/>
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
                        <th class="th">Hospital Name</th>
                        <th class="th">Hospital Type</th>
                        <th class="th">City</th>
                        <th class="th">District</th>
</tr>

                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                <form method="post" action="actions/hospital_update.php" >
                            <tr>
                                <td class="td3 td4"><?php echo $row['id_hospital']; ?></td>
                                <td class="td4"><input class="td3" type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="type" value="<?php echo $row['type']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="city" value="<?php echo $row['city']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="district" value="<?php echo $row['district']; ?>"></td>

                                    <td class="td4">
                                    <input type="hidden" name="id_hospital" value="<?php echo $row['id_hospital']; ?>" /> 
                                    <input align="left" type="submit" value="Update" />
                                    </br></br>
                                    <a href="actions/hospital_delete.php?id=<?php echo $row['id_hospital']; ?>">Delete</a></td>
                            </tr>
                        </form>
                        <?php
                    }
                }

                $conn->close();
                ?>
                </tbody>
            </table>
            <hr style="background-color: #cc0033">
        </div>
<!--include footer-->
<?php
include './footer.php';
?>
    </body>
</html>
