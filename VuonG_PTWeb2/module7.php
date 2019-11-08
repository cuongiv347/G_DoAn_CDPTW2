<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tomato Responsive Restaurant HTML5 Template</title>
    <meta name="author" content="Surjith S M">
    <meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
    <meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/plugin.css">
    <link rel="stylesheet" href="css/style.css">
    <script src = "js/angular.min.js"></script>
</head>
<script>
         function studentController($scope,$http) {
            var url = "./data.txt";

            $http.get(url).then( function(response) {
               $scope.students = response.data;
            });
         }
      </script>
<body>
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase">Recipies</h2>
                    <p>Tomato is a delicious restaurant website template</p>
                </div>
            </div>
        </div>
    </section>
    <section class="recipie-content">
    <div ng-app="" ng-controller="studentController">
        <div class="container" ng-repeat = "student in students">
            
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="images/recipie/1.jpg" alt="" />
                        <div class="rc-info">
                            <h4>{{ student.Name }}</h4>
                            <div class="rc-ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                            </div>
                            <p>{{ student.RollNo }}</p>
                            <a href="./module8.php" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="images/recipie/2.jpg" alt="" />
                        <div class="rc-info">
                            <h4>{{ student.Name }}</h4>
                            <div class="rc-ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                            </div>
                            <p>{{ student.RollNo }}</p>
                            <a href="./module8.php" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="images/recipie/3.jpg" alt="" />
                        <div class="rc-info">
                            <h4>{{ student.Name }}</h4>
                            <div class="rc-ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                            </div>
                            <p>{{ student.RollNo }}</p>
                            <a href="./module8.php" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="images/recipie/4.jpg" alt="" />
                        <div class="rc-info">
                            <h4>{{ student.Name }}</h4>
                            <div class="rc-ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                            </div>
                            <p>{{ student.RollNo }}</p>
                            <a href="./module8.php" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="images/recipie/5.jpg" alt="" />
                        <div class="rc-info">
                            <h4>{{ student.Name }}</h4>
                            <div class="rc-ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                            </div>
                            <p>{{ student.RollNo }}</p>
                            <a href="./module8.php" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="images/recipie/6.jpg" alt="" />
                        <div class="rc-info">
                            <h4>{{ student.Name }}</h4>
                            <div class="rc-ratings">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                                <span class="fa fa-star active"></span>
                            </div>
                            <p>{{ student.RollNo }}</p>
                            <a href="./module8.php" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-recipie">
        <div class="container">
            <hr>
            <h3>Featured Recipe</h3>
            <div class="row">
                <div class="featured-recipies">
                    <div class="fp-content">
                        <a href="./module8.php"><img src="images/recipie/1/1.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./module8.php">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./module8.php"><img src="images/recipie/1/2.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./module8.php">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./module8.php"><img src="images/recipie/1/3.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./module8.php">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./module8.php"><img src="images/recipie/1/4.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./module8.php">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./module8.php"><img src="images/recipie/1/2.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./module8.php">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./module8.php"><img src="images/recipie/1/3.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./module8.php">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script defer src="../jquery.flexslider.js"></script>
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.min.js"></script>
    <script src="js/vendor/bootstrap-clockpicker.min.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
    <script src="js/vendor/mc/main.js"></script>
    <script src="js/vendor/validate.js"></script>
    <script src="js/reservation.js"></script>
    <script src="js/main.js"></script>

</body>

</html>