<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    session_start();

    require("connect.php");

    if (isset($_POST['psubmit'])) {

        $email = $_SESSION['email'];


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        // $email = $_POST['email'];   
        $dob = $_POST['dob'];
        $mobile_no = $_POST['mobile_no'];
        $hn = $_POST['hn'];
        $pcode = $_POST['pcode'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $city = $_POST['city'];
        $experience= $_POST['experience'];
		$designation= $_POST['designation'];
		$station= $_POST['station'];
        $pid = $_POST['pid'];
        // $password=$_POST['password'];

        //$fname','$lname','$gender','$email','$dob','$mobile_no','$hn','$pcode',
        //'$state','$district','$city','$experience','$designation','$station','$pid'

        $sql = "UPDATE police_reg 
        SET 
            fname = '$fname',
            lname = '$lname',
            gender = '$gender',
            dob = '$dob',
            mobile_no = '$mobile_no',
            hn = '$hn',
            pcode = '$pcode',
            state = '$state',
            district = '$district',
            city = '$city',
            experience = '$experience',
            designation = '$designation',
            station = '$station'
        WHERE 
            email = '$email'";



        if (update($sql)) {

    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Approved',
                }).then((result) => {
                    window.location.replace('police_profile.php');
                });
            </script>

    <?php
        } else {
            echo "error";
        }
    }
    ?>
</body>

</html>