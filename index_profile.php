<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CodeDada - Your One stop solution for coding</title>
		<?php
			session_start();
			include("includes/db_connection.php");
			if(!(isset($_SESSION["username"]))) {
				//header("location: login.php");
			}
			include("includes/header.php");
		?>
        
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons -->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./assets/css/index_profile.css" rel="stylesheet" />
	
	
</head>
<body id="page-top">
        <!-- Navigation-->
        <!--<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><h2>code_Dada</h2></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./contest.php">Contests</a></li>
                        <li class="nav-item"><a class="nav-link " href="logout.php">Logout</a></li>
                        <li class="nav-item" id="nav1">
                <a class="nav-link" href="problems.php">Problems</a>
            </li>
            
            <li class="nav-item" id="nav3">
                <a class="nav-link" href="users.php">Users</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php //echo $_SESSION["username"]; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Profile</a>
                    <?php
                        /*$username = $_SESSION['username'];
                        $sql = "SELECT organizer, admin FROM accounts WHERE username='$username'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        if($row['organizer']) {
                            echo '<a class="dropdown-item" href="organizer/manage.php"><i class="fa fa-plus" aria-hidden="true"></i> Manage Contests</a>';
                            echo '<a class="dropdown-item" href="organizer/create_contest.php"><i class="fa fa-plus" aria-hidden="true"></i> Create Contests</a>';
                            echo '<a class="dropdown-item" href="#"><i class="fa fa-trophy" aria-hidden="true"></i> My Contests</a>';
                        }
                        if($row['admin']) {
                            echo '<a class="dropdown-item" href="#"><i class="fa fa-lock" aria-hidden="true"></i> Admin</a>';
                        }*/
                    ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                </div>
            </li>
                    </ul>
                </div>
            </div>
        </nav>-->
        <!-- Masthead-->
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script> -->
        <?php include("includes/navbar.php"); ?>
        <section class="section2 bg-light" >
            <div class="container">
                <!-- Row 1-->
                <div class="row align-items-center  mb-4 mb-lg-5">
                    <div class="col-xl-5 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="./assets/images/developer-coding.svg" alt="" /></div>
                    <div class="col-xl-3 col-lg-5">
                        <div class="featured-text">
                            <h1>Welcome!!</h1>
                            <h4><?php echo $_SESSION['username'] ?></h4>
                            <p class="text-black-50 mb-0">
                            <?php
                                $username = $_SESSION['username'];
                                $sql = "SELECT * FROM accounts WHERE username='$username'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['email_id'];
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
                        <h1 class="text-center">Your TimeLine</h1>
                <div class="container">
                
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                        
                    <!-- <div class="col-lg-12"><img class="img-fluid" src="./assets/images/hire.jpg" alt="" /></div> -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
                <canvas id="myChart" width="800" height="500"></canvas>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    /*var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });*/
                    // Chart.defaults.line.spanGaps = true;
                    /*var data = [{
                        x: 10,
                        y: 20
                    }, {
                        x: 15,
                        y: 10
                    }];
                    var options = {
                        scales: {
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    };
                    var myLineChart = new Chart(ctx, {
                        type: 'line',
                        data: data,
                        options: options
                    });*/
                    var lineChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                            datasets: [
                            {
                                label: "2020",
                                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                            }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: 'Contest history'
                            }
                        }
                    });
                    </script>
                    
                </div>
                <!--Row 3-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="./assets/images/code_discuss.png" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-white text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-black">again a placeholder</h4>
                                    <p class="mb-0 text-black-50">placeholder</p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <br>
       <br>
       <br>
       <br>
                </section>
       
        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">somewhere in the cloud</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">hello@codedada.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">9616123719872391</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © codeDada.com 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="./assets/js/index_profile.js"></script>
    </body>
	</html>