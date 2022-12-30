<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/HR/admin.css">
    <title>ADMIN</title>
</head>

<body>
    <nav class="nav-bar w-100 p-0 m-0">
        <div class="logo-container">
            <img src="images/ES_LOGO.png" class="logo-img" alt="">
        </div>
        <div class="menu-button w-25 pe-2">
            <img src="images/teen.png" alt="">
            <h4 class="name">JOHN LENNIN</h4>
        </div>
    </nav>

    <section class="main w-100">
        <div class="side-nav w-25">
            <div class="btn-holder w-100">
                <button class="side-btn active-btn" id="dash-btn">
                    <i class="fa-solid fa-warehouse font-large"></i>
                    COURSE MANAGEMENT
                </button>
                <button class="side-btn" id="user-btn">
                    <i class="fa-solid font-large fa-users"></i>
                    STUDENTS
                </button>
                <button class="side-btn" id="products-btn">
                    <i class="fa-solid font-large fa-boxes-packing"></i>
                    STAFF
                </button>
                <button class="side-btn" id="profile-btn">
                    <i class="fa-solid font-large fa-address-card"></i>
                    REQUESTS
                </button>
                <a href="" class="w-100">
                    <button class="side-btn btn-logout w-100">
                        LOGOUT
                    </button>
                </a>
            </div>
        </div>
        <div class="panel-section w-75 p-2">
            <div class="panel w-100" id="1">
                <div class="units-list w-100 p-2">
                    <div class="units-head w-100">
                        <h3 class="p-0 m-0">UNITS LIST</h3>
                    </div>
                    <hr class="w-100">
                    <div class="users-tbl w-100">
                        <table class="w-100">
                            <thead class="table-thead">
                                <tr>
                                    <th>#</th>
                                    <th>USERNAME</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>OPTIONS</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <tr class="w-100">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="units-list w-100 p-2">
                    <div class="units-head w-100">
                        <h3 class="p-0 m-0">UNITS REGISTRATION REQUESTS</h3>
                    </div>
                    <hr class="w-100">
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-section w-100">
        <div class="upper-foot w-100">
            <a href="">CALENDERS</a>
            <a href="">CONTACT</a>
            <a href="">PRIVACY POLICIES</a>
        </div>
        <div class="lower-foot w-100">
            <div class="logo-display">
                <span class="line"></span>
                <img src="images/ES_white.png" alt="">
                <span class="line"></span>
            </div>
            <h3>SUGOI, BONDO WEST DISTRICT, MAZRAWI/P.O. BOX 5100-0011</h3>
            <div class="socials-container">
                <div class="round">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>