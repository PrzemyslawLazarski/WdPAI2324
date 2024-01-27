<?php

if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit();
}
$userName = $_SESSION['user']['name'];
$userSurname = $_SESSION['user']['surname'];
$userEmail = $_SESSION['user']['email'];
$userPhone = $_SESSION['user']['phone'];
$userType = $_SESSION['user']['type'];
?>


<!DOCTYPE html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc73b75636.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/public/js/logo.js" defer></script>
    <link rel="stylesheet" type="text/css" href="/public/css/profile_page.css">
    <title>ReservEat</title>
</head>

<body>

    <div class="desktop">
        <nav>
            <div class="logo">
                <img src="/public/img/logo.svg">
                <p>ReservEat</p>
            </div>
            <ul>
                <li>
                    <a href="/home_page" class="button">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="/restaurant_page" class="button">
                        <i class="fa-solid fa-utensils"></i>
                        Restaurants
                    </a>
                </li>
                <li>
                    <a href="/my_reservation" class="button">
                        <i class="fa-regular fa-calendar"></i>
                        My reservation
                    </a>
                </li>
                <?php
                if ($userType == 2) {
                    echo '<li>
                            <a href="/add_restaurant" class="button">
                                <i class="fa-solid fa-plus"></i>
                                Add restaurant
                            </a>
                        </li>';
                }
                ?>
                <li class='chosen'>
                    <a href="/profile_page" class="button">
                        <i class="fa-solid fa-user"></i>
                        My profile
                    </a>
                </li>
                <li>
                    <a href="/logout" class="button">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        Sign out
                    </a>
                </li>
                <li class="userID">
                    <?php
                    echo $userName.' '.$userSurname;
                    ?>
                    <p><?php echo $userEmail; ?></p>
                </li>
            </ul>
        </nav>
        <main>
            <header>
                <form class='search_bar'>
                    <input name="Search by name" type="text" placeholder="Search by name">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </header>
            <div class="profile">
                <div class="my">
                    My profile
                </div>
                <div class="update">
                    Update your profile information
                </div>
                <div class="title">
                    <div class="title_basic">
                        Basic information
                    </div>
                    <a href="/edit" class="edit">
                        Edit
                    </a>
                </div>
                
                <div class="basicInformation">
                    <div class="data">
                        <div>
                            Name : <?php echo $userName; ?>
                        </div>
                        <div>
                            Surname : <?php echo $userSurname; ?>
                        </div>
                        <div>
                            E-mail : <?php echo $userEmail; ?>
                        </div>
                        <div>
                            Phone number : <?php echo $userPhone; ?>
                        </div>
                    </div>
                    <div class="photo">
                        <img src="public/img/addrestaurant.svg" alt="PHOTO">
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>