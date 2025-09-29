<!DOCTYPE html>
<?php
//include database
include './actions/dbConnection.php';
//create variables
$keyword = "";
$doctor = "";

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
if (isset($_GET['selectedDoctor'])) {
    $doctor = $_GET['selectedDoctor'];
}
//search query
$query = "select * from doctor";
$result = $conn->query($query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--link css file-->
        <link type="text/css" rel="stylesheet" href="index.css"/>
    </head>
    <body>
        <!--include header-->
        <?php
        include './header.php';
        ?>
        <!--create div , search options & vote button-->
        <!--this area diaplay after sign up--> 
        <div class="d3">
            </br></br>
             <?php
                            if ($is_login) {
                                ?>  
            <div class="box2">
                <form method="GET" action="appo_add.php">

                    <table border="0" width="100%">
                        <tr>
                            <td>
                                <select class="cat" name="selectedDoctor">

                                    <option value="">--Choose Doctor--</option>

                                    <?php
                                    $queryCat = "select * from doctor";
                                    $resultCat = $conn->query($queryCat);
                                    if ($resultCat->num_rows > 0) {
                                        while ($row = $resultCat->fetch_assoc()) {
                                            ?>
                                            <option <?php if ($position == $row['id_doctor']) {
                                        echo "selected";
                                    } ?> value="<?php echo $row['id_doctor'] ?>">
                                            <?php echo $row['level'] ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </td>

                            <td>  <input  type="text" name="keyword" placeholder="Search for anything...." 
                                          value="<?php echo $keyword; ?>" autocomplete="off" autocorrect="off" autocapitalize="off"></td>
                            <td> <input type="submit" value="Search" /></td>
                        </tr>
                    </table>

                </form>
            </div>
            
            
            <div class="box3">
                <form method="GET" action="appo_add.php">
                    <input align="center" type="submit" value="Add New Appointment--->" />      
                </form>
            </div>
            </br>
             <!-- Slideshow container -->
            <div align='center' class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 5</div>
                    <img src="images/S1.jpg" style="width:100%; height: 750px">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 5</div>
                    <img src="images/S2.jpg" style="width:100%; height: 750px">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 5</div>
                    <img src="images/S3.jpg" style="width:100%; height: 750px">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="images/S4.jpg" style="width:100%; height: 750px">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="images/S5.jpg" style="width:100%; height: 750px">
                </div>



                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>

            </div>
<!--image slideshow java script-->
            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    setTimeout(showSlides, 3000); // Change image every 3 seconds
                }
            </script>
            
                                            <?php
                            } else {
                                ?>
            <!-- Slideshow container -->
            <div align='center' class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 5</div>
                    <img src="images/S8.jpg" style="width:100%; height: 750px">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 5</div>
                    <img src="images/S7.jpg" style="width:100%; height: 750px">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 5</div>
                    <img src="images/S6.jpg" style="width:100%; height: 750px">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="images/S5.jpg" style="width:100%; height: 750px">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="images/S4.jpg" style="width:100%; height: 750px">
                </div>



                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>

            </div>

            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    setTimeout(showSlides, 3000); // Change image every 3 seconds
                }
            </script>
                                <?php
                            }
                            ?>
        </div>
        <!--include footer-->
<?php
include './footer.php';
?>
    </body>
</html>
