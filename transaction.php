<html>
    <head>
        <title>TSF Transaction History</title>
        <link rel="icon" href="https://png.pngtree.com/png-clipart/20190517/original/pngtree-vector-bank-icon-png-image_3762870.jpg">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <!--header starts-->
        <div class="header_container">
            <div class="header_logo">TSF BANKING </div>
            <div class= "nav" >
                <div class="nav-items" onclick="document.location='index.php'">Homepage</div>
                <div class="nav-items" onclick="document.location='users.php'">View Customers</div>
                <div class="nav-items" onclick="document.location='transfer.php'"> Transfer Money</div>
                <div class="nav-items"><p style="background-color: #000408; height: 80px; color: aqua">Transaction History</p></div>
                
            </div>
        </div>
    <!--header ends-->
    <div class="banner">
        <div class="overlay1">
    <!--table starts--> 
    <div class="table-responsive-sm">
            <table style="margin-left:50px;" class="table table-hover table-striped table-condensed table-bordered">
                <thead style="color : black;">
                    <tr>
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount transferred</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'connect.php';

                    $sql = "select * from transaction";

                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {
                    ?>

                        <tr style="color : black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['sender']; ?></td>
                            <td class="py-2"><?php echo $rows['receiver']; ?></td>
                            <td class="py-2"><?php echo $rows['amount']; ?> </td>
                            <td class="py-2"><?php echo $rows['time']; ?> </td>

                        <?php
                    }

                        ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
    <!--body ends-->
    <!--footer starts-->
    <div class="footer">
        Designed by VIVEKA R, Web Development Intern at The Sparks Foundation-GRIP.
    </div>
    <!--footer ends-->
           
    </body>

</html>