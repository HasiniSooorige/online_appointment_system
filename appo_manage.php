<?php
//include database
include './actions/dbConnection.php';
//search query
$query = "select * from appo";
$result = $conn->query($query);
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--link css file-->
        <link type="text/css" rel="stylesheet" href="appo_manage.css"/>
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
                        <th class="th">Patient Name</th>
                        <th class="th">Patient Age</th>
                        <th class="th">Doctor Name</th>
                        <th class="th">Position</th>
                          <th class="th">Date</th>
                        <th class="th">Time</th>
</tr>

                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                <form method="post" action="actions/appo_update.php" >
                            <tr>
                                <td class="td3 td4"><?php echo $row['id_appo']; ?></td>
                                <td class="td4"><input class="td3" type="text" name="pname" value="<?php echo $row['pname']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="age" value="<?php echo $row['age']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="dname" value="<?php echo $row['dname']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="position" value="<?php echo $row['position']; ?>"></td>
<td class="td4"><input class="td3" type="text" name="date" value="<?php echo $row['date']; ?>"></td>
                                <td class="td4"><input class="td3" type="text" name="time" value="<?php echo $row['time']; ?>"></td>
                                    <td class="td4">
                                    <input type="hidden" name="id_appo" value="<?php echo $row['id_appo']; ?>" /> 
                                    <input align="left" type="submit" value="Update" />
                                    </br></br>
                                    <a href="actions/appo_delete.php?id=<?php echo $row['id_appo']; ?>">Delete</a></td>
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
