<?php 
    session_start();
    //global variables
    $data = array();

    //database variables
    $db_name = "hotelwebsite";
    $mysql_username = "root";
    $mysql_password = "dell";
    $servername = "localhost";

    //database connection
    $connection = mysqli_connect($servername, $mysql_username, $mysql_password, $db_name);
    $query_status = "";

    //Code for signup
    if(isset($_POST['signup'])) {
        
        $name = mysqli_real_escape_string( $connection, $_POST['name'] );    
        $gender = mysqli_real_escape_string($connection, $_POST['gender']);
        $mobile = mysqli_real_escape_string($connection, $_POST['mobile'] );
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($connection, $_POST['confirmpassword']);
        $address = mysqli_real_escape_string($connection, $_POST['address']);
        
        $query_find = "SELECT * FROM user_info WHERE email = '$email'";
        $query_status = mysqli_query($connection, $query_find);

        if(mysqli_num_rows($query_status) == 0) {
            
            $query_insert = "INSERT INTO user_info (name, gender, mobile, email, password, address) 
                             VALUES ('$name', '$gender', '$mobile', '$email', '$password', '$address')";
           
            $query_status = mysqli_query($connection, $query_insert);

            echo '<script language = "javascript">';
            echo "alert('Register Successfully')";
            echo '</script>';
            
        } else {
            echo '<script language = "javascript">';
            echo "alert('Already Exists...Go back')";
            echo '</script>';
        }
    }

    //Code for contact
    if(isset($_POST['contactus'])) {
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $subject = mysqli_real_escape_string($connection, $_POST['subject']);
        $message = mysqli_real_escape_string($connection, $_POST['message']);
        $date = date("Y-m-d");   
        $query_insert = "INSERT INTO contact (request_date, name, phone, email, subject, message)
                         VALUES ('$date', '$name', '$phone', '$email', '$subject', '$message')";
        $query_status = mysqli_query($connection, $query_insert);

        if($query_status == 1) {
            echo '<script language = "javascript">';
            echo "alert('Request Sent Successfully')";
            echo '</script>';
        }        
    }

    //code for login
    if(isset($_POST['btnLoginUser'])) {
        
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $query_find = "SELECT id, name, mobile FROM user_info WHERE email = '$email' AND password = '$password'";        
        
        $query_status = mysqli_query($connection, $query_find);
        
        if(mysqli_num_rows($query_status) == 1) {
            echo '<script language = "javascript">';
            echo "alert('Login Successfully')";
            echo '</script>';
            
            while($row = $query_status->fetch_assoc()) {
                $_SESSION['uid'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['userEmail'] = $email;
                $_SESSION['mob'] = $row['mobile'];
            }

            header('Location: index.php');
        } else {

            echo '<script language = "javascript">';
            echo "alert('Enter your valid credentials')";
            echo '</script>';
        }
    }
    
    //Code for booking
    
    if(isset($_POST['booking'])) {
        $uid = $_SESSION['uid'];
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $mob = mysqli_real_escape_string($connection, $_POST['phoneno']);
        $country = mysqli_real_escape_string($connection, $_POST['country']);
        $check_in = mysqli_real_escape_string($connection, $_POST['check_in']);
        $_SESSION['check-in'] = $check_in;
        $check_out = mysqli_real_escape_string($connection, $_POST['check_out']);
        $_SESSION['check-out'] = $check_out;
        $adults = mysqli_real_escape_string($connection, $_POST['adults']);
        $childrens = mysqli_real_escape_string($connection, $_POST['childrens']);
        $room_type = mysqli_real_escape_string($connection, $_POST['room_type']);
        $_SESSION['room_type'] = $room_type;
        $comments = mysqli_real_escape_string($connection, $_POST['comments']);
        $booking_date = date("Y-m-d");

        //calculate room price for the particular date period
        $price = roomPrice($room_type);   
        $dateDiff = date_diff(date_create($check_in), date_create($check_out))->format('%d');
        $totalAmount = $dateDiff * $price;

        $query_book = "INSERT INTO booking (booking_date, user_id, name, email, mob, country, check_in, check_out, adults, childrens, room_type, total_amount, comments)
                          VALUES ('$booking_date', '$uid', '$name', '$email', '$mob', '$country', '$check_in', '$check_out', '$adults', '$childrens', '$room_type','$totalAmount', '$comments')";
        $_SESSION['query'] = $query_book;     
        $_SESSION['total'] = $totalAmount;
        // echo "var res = confirm('Ready to pay for " . $dateDiff . " days * " . $price ." = " . $totalAmount ."')";
        echo '<script language = "javascript">';
        echo "s = confirm('Ready to pay for " . $dateDiff . " days * " . $price ." = " . $totalAmount ."')";
        echo "alert(s)";
        // echo "if(s)) { <?php header('location: proceed-pay.php')
        echo '</script>';
        header('location: proceed-pay.php');
        // echo "<script>setTimeout(\"location.href = 'proceed-pay.php';\",100);</script>";
        // header( "refresh:5; url=proceed-pay.php" );
        
        // // $query_status = mysqli_query($connection, $query_insert);

        // if(mysqli_query($connection, $query_insert)) {
        //     echo '<script language = "javascript">';
        //     echo "alert('Booking Successfully')";
        //     echo '</script>';
        // } else {
        //     echo '<script language = "javascript">';
        //     echo "alert('Please enter valid information')";
        //     echo '</script>';
        // }
    }

    if(isset($_POST['submitPayment'])) {
        
        if(mysqli_query($connection, $_SESSION['query']) == 1) {
            echo '<script language = "javascript">';
            echo "alert('Booking Successfully')";
            echo '</script>';
            header("location: booking-info.php");
        } else {
            echo '<script language = "javascript">';
            echo "alert('Please enter valid information')";
            echo '</script>';
        }
    }

    function unsetSession() {
        global $data;
        $data[0] = getBookingId();
        $data[1] = $_SESSION['room_type'];
        $data[2] = $_SESSION['check-in'];
        $data[3] = $_SESSION['check-out'];
        $data[4] = $_SESSION['total'];

        unset($_SESSION['check-in']);
        unset($_SESSION['check-out']);
        unset($_SESSION['room_type']);
        unset($_SESSION['query']);
        unset($_SESSION['total']);
    }

    function getBookingId() {
        $result = bookingHistory();
        while($row =mysqli_fetch_assoc($result))
            $id = $row['id'];
        return $id;
    }

    //booking history for particular id
    function bookingHistory() {
        $query_find = "SELECT * FROM booking WHERE user_id = '" . $_SESSION['uid'] . "'";
        global $connection;
        $query_status = mysqli_query($connection, $query_find);
        return $query_status;
    }

    //booking history for all
    function bookingHistoryAdmin() { 
        $query_find = "SELECT * FROM booking";
        global $connection;
        $query_status = mysqli_query($connection, $query_find);
        return $query_status;
    }

    //contact request history
    function contactHistory() { 
        $query_find = "SELECT * FROM contact";
        global $connection;
        $query_status = mysqli_query($connection, $query_find);
        return $query_status;
    }
    
    //list users 
    function listUsers() {
        $query_find = "SELECT * FROM user_info";
        global $connection;
        $query_status = mysqli_query($connection, $query_find);
        return $query_status;
    }

    //code for home login button
    function checklogin() {
        if(!isset($_SESSION['name']))
            echo 'Login';
        else
            echo 'Logout'; 
    }

    if(isset($_POST['Login'])) {
        if(!isset($_SESSION['name']))
            header('Location: login.php');
    }

    if(isset($_POST['Logout'])) {
        if(!isset($_SESSION['name']))
            header('Location: login.php');
        else {
            session_destroy();
            unset($_SESSION['uid']);
            unset($_SESSION['name']);
            unset($_SESSION['userEmail']);
            unset($_SESSION['mob']);
            header("location: index.php");            
        }
    }

    function profileLink() {
        if($_SESSION['userEmail'] == "admin@gmail.com")
            echo 'users.php';
        else
            echo 'booking-profile.php';
    }

    function roomPrice($roomName) {
        if($roomName == "Single Room")
        return 6423.05;
        else if($roomName == "Double Room - With Sider")
        return 9309.81;
        else if($roomName == "Delux Room")
        return 13639.95;
        else if($roomName == "King Room")
        return 15805.03;
        else if($roomName == "Honeymoon Room")
        return 20856.86;
        else if($roomName == "Family Room")
        return 10753.19;  
        return 2;  
    }
?>