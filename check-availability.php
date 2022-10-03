    <br><br>
    <div class="container justify-content-center col-lg-11 col-md-10 col-sm-10">
        <h2>Check Booking Availability</h2>
        <?php
        require_once('db.php');
        $error = "";
        $color = "red";
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $phone = mysqli_real_escape_string($con,$_POST['phone']);
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $adults = $_POST['no_adults'];
            $rooms = $_POST['no_rooms'];
            $message = mysqli_real_escape_string($con,$_POST['message']);

            $q = "SELECT * FROM requests ORDER BY requests.id DESC LIMIT 1";
            $r = mysqli_query($con, $q);
            if(mysqli_num_rows($r) > 0){
                $row = mysqli_fetch_array($r);
                $id = $row['id'];
                $id = $id + 1;
            }
            else{
                $id = 1;
            }


            if(empty($name) or empty($email) or empty($phone) or $adults == "no" or $rooms == "no" or empty($message) or $day == "no" or $month == "no" or $year == "no"){
                $error = "All Feilds Required, Try Again";

            }
            else{
                $insert_query = "INSERT INTO `requests`(`id`, `name`, `email`, `phone`, `day`, `month`, `year`, `adults`, `rooms`, `message`) VALUES ('$id','$name','$email','$phone','$day','$month','$year','$adults','$rooms','$message')";
                if(mysqli_query($con, $insert_query)){
                    $error = "We've got your request";
                    $color = "green";
                }
                else{
                    $error = "Error occured";
                }
            }
        }
        ?>
        <!-- show form error -->
        <label style="color: <?php echo $color; ?>">
            <?php
            echo $error;
            ?>
        </label>

        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <form role="form" class="wowload fadeInRight" method="post">
                <div class="row align-items-end">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-3 ">
                            <label class="form-label" style="font-weight:500;">Name</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-3 ">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input type="email" name="email" class="form-control shadow-none" >
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-3 ">
                            <label class="form-label" style="font-weight:500;">Phone</label>
                            <input type="number" name="phone" class="form-control shadow-none" placeholder="+94 77 123 4567" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3 ">
                            <label class="form-label" style="font-weight:500;">No. of Rooms</label>
                            <select class="form-control form-select" name="no_rooms">
                                <option value="no">Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3 ">
                            <label class="form-label" style="font-weight:500;">No. of Adults</label>
                            <select class="form-control form-select" name="no_adults">
                                <option value="no">Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3 ">
                            <label class="form-label" style="font-weight:500;">Check-in</label>
                            <input type="date" name="check-in" class="form-control shadow-none" >
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3 ">
                            <label class="form-label" style="font-weight:500;">Check-out</label>
                            <input type="date" name="checkout" class="form-control shadow-none" >
                        </div>
                    </div>
                    <!--                    <div class="row">-->
                    <!--                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3 ">-->
                    <!--                            <label class="form-label" style="font-weight:500;">Message</label>-->
                    <!--                            <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="col-lg-1 col-md-6 col-sm-12 mb-lg-3 mt-2">
                        <button type="submit" class=" btn shadow-none btn-outline-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div><br><br><br>

    <!-- check availability form section end-->