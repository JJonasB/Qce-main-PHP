<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <?php session_start();?>
</head>
    <title>Document</title>
</head>
<body>
    <!-- Header Section ito-->
    <header>
            <a href="index.php" class="logo">
                <img src="qceimages/KYUSI-E.png" class="kyusilogo" alt="Kyusi Logo">
                <span>Kyusi Esports</span>
            </a>

            <ul class="navbar">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="QCEnews.php" class="news">News</a></li>
                <li><a href="QCEFAQ.php" class="faq">FAQ</a></li>
                <li><a href="QCEmembership.php" class="member">Membership</a></li>
                <li><a href="QCesports.php" class="esports">Esports</a></li>
                <li><a href="QCEshop.php" class="shop">Shop</a></li>
            </ul>

            <div class="header-main">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href='#' class='cartcon'> <i class='ri-shopping-cart-2-fill'> </i> Cart</a>";
                    echo "<a href='#' class='user'> <i class='ri-user-fill'> </i>Log in</a>";
                    echo "<div class='bx bx-menu' id='menu-icon'>";
                } else {
                    echo "<a href='#' class='cartcon'> <i class='ri-shopping-cart-2-fill'> </i> Cart</a>";
                    echo "<a href='#' class='user'> <i class='ri-user-fill'> </i>Profile</a>";
                    echo "<a href='#' class='user'> </i>Logout</a>";
                    echo "<div class='bx bx-menu' id='menu-icon'>";
                }
                ?>
                </div>
            </div>
        </header>
        
</html>