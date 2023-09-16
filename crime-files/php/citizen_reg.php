<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    require('connect.php');//import external file
    if (isset($_POST['citizen_reg'])) {
        //submit button name
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];   
        $dob = $_POST['dob'];
        $mobile_no = $_POST['mobile_no'];
        $address = $_POST['address'];
        $cid = $_POST['cid'];
        $password=$_POST['password'];

        $sql = "select * from crime_login where email='$email'";
        if (num($sql) == 0) {
            $sql = "insert into citizen_reg values('$name','$gender','$email',$mobile_no,'$address','$cid')";
            insert($sql);
            $sql2 = "insert into crime_login values('$email','$password',1,1)";
            insert($sql2);
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Success!',
                }).then((result) => {
                    window.location.replace('../login.html');
                })
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Account already existing!',
                }).then((result) => {
                    window.location.replace('../login.html');
                })
            </script>
    <?php

        }
    }
    ?>
</body>

</html>