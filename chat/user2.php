<?php
include 'conn.php';




if (isset($_POST['submitmsg'])) {
   
    $msg = $_POST['usermsg1'];

    $qr="insert into user2(Msg)Values('". $msg."')";
    $res=mysqli_query($con,$qr);


    if ($res) {
          // code...

        echo "data inserted successfully";



      }  

}



?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <title>Tuts+ Chat Application</title>
        <meta name="description" content="Tuts+ Chat Application" />
        <link rel="stylesheet" href="style.css" />
        <script src="jquery-3.5.1.min.js"></script>
        <style>
            .row:after
            {
                display:table;
                content: "";
                clear: both;
            }
            .col1
            {
                float: left;
                width: 40%;
            }

            .col2
            {
                float: left;
                width: 40%;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b></b></p>
                <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            </div>

            
            <div id="chatbox">
                <div class="row">
                    <div class="col1">
                        
            <?php

            $qr="select * from user1";
            $res=mysqli_query($con,$qr);

            while($row=mysqli_fetch_assoc($res)) {
                // code...
                ?>

                <h2><?php echo $row['Msg']; ?></h2>

                <?php





            }


            ?>
                    </div>

                    <div class="col2">
                        
            <?php

            $qr="select * from user2";
            $res=mysqli_query($con,$qr);

            while($row=mysqli_fetch_assoc($res)) {
                // code...
                ?>

                <h2><?php echo $row['Msg']; ?></h2>

                <?php





            }


            ?>
                    </div>
                </div>

            </div>

            <form name="message" action="user2.php" method="POST">
                <input name="usermsg1" type="text" id="usermsg" />
                <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
            </form>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {});

        <script type="text/javascript">

        </script>
    </body>
</html>