<html>
    <head>
        <title>Basic Banking System</title>
        <link rel="icon" href="https://png.pngtree.com/png-clipart/20190517/original/pngtree-vector-bank-icon-png-image_3762870.jpg">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <?php
    include 'connect.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>

        <!-- header starts -->
        <div class="header_container">
            <div class="header_logo"> TSF BANKING </div>
            <div class="nav">
                <div class="nav-items" onclick="document.location='index.php'">Homepage</div>
                <div class="nav-items" onclick="document.location='users.php'">View Customers</div>
                <div class="nav-items"><p style="background-color: #000408; height: 80px; color: aqua">Transfer Money</div>
                <div class="nav-items" onclick="document.location='transaction.php'">Transaction History</div>
            </div>
        </div>
        <!-- header ends -->
        <!-- body starts -->
        <div class="banner">
           <div class="overlay1">
           <form method="post" name="tcredit" class="tabletext" ><br>
               <div style="margin-top:15px; margin-left:20px;" class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">S.no</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Account Balance</th>
                                <th scope="col" class="text-center py-2">To Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['Name'] ?></td>
                                    <td class="py-2"><?php echo $rows['e-mail'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    <td><a href="usertransfer.php?id=<?php echo $rows['id']; ?>"> <button type="button" class="btn" style="background-color : #24bace;">Transfer money</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </form>
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