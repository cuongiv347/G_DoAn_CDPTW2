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
    <script src="js/angular.min.js"></script>

</head>
<script>
function studentController($scope, $http) {
    var url = "./data.txt";

    $http.get(url).then(function(response) {
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

    <section class="recipie-single single-recipe">
        <div ng-app="" ng-controller="studentController">
            <div class="container" ng-repeat = "student in students">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-recipe-image">
                            <img class="img-responsive" src="img/recipie/single/1.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <h3>Direction</h3>
                        <br>
                        <ol class="directions-list">
                            <li>{{ student.Percentage }}.</li>
                            <li>{{ student.Percentage }}</li>
                            <li>{{ student.Percentage }}</li>
                            <li>{{ student.Percentage }}</li>
                            <li>{{ student.Percentage }}</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <h3>Pasta With Fried Lemons</h3>
                        <p>{{ student.Pasta }}</p>
                        <div class="ingredients">
                            <h4 class="title">Ingredients</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i>1/2 cup chopped red onions</li>
                                <li><i class="fa fa-check-square-o"></i>2 ounce lemon drops chupas chups bear</li>
                                <li><i class="fa fa-check-square-o"></i>3 pound seasme snaps powder gingerbread</li>
                                <li><i class="fa fa-check-square-o"></i>1/4 cup jujubes jelly chupa</li>
                                <li><i class="fa fa-check-square-o"></i>1/2 cup sour cream (optional)</li>
                                <li><i class="fa fa-check-square-o"></i>1 ounce suger plum pastry fruitcake</li>
                                <li><i class="fa fa-check-square-o"></i>1/4 cup jujubes jelly chupa</li>
                            </ul>
                        </div>
                        <h3 class="heading-bottom-line">Descriptions</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur.</p>
                        <div class="nutrition-table">
                            <h3 class="heading-bottom-line">Nutrition</h3>
                            <div class="table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Nutrient</th>
                                            <th>DV</th>
                                            <th>%DV</th>
                                        </tr>
                                        <tr>
                                            <td>Protein</td>
                                            <td>3.2 gr</td>
                                            <td>5%<span class="progressbar"><span class="level-3"></span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fat</td>
                                            <td>6.5 gr</td>
                                            <td>6%<span class="progressbar"><span class="level-6"></span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Carbohydrates</td>
                                            <td>3.2 gr</td>
                                            <td>9%<span class="progressbar"><span class="level-4"></span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Calories</td>
                                            <td>4.8 gr</td>
                                            <td>2%<span class="progressbar"><span class="level-8"></span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cholesterol</td>
                                            <td>102 kcal</td>
                                            <td>8%<span class="progressbar"><span class="level-10"></span></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                        <a href="./recipe_detail-image.html"><img src="img/recipie/1/1.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./recipe_detail-image.html"><img src="img/recipie/1/2.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./recipe_detail-image.html"><img src="img/recipie/1/3.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./recipe_detail-image.html"><img src="img/recipie/1/4.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./recipe_detail-image.html"><img src="img/recipie/1/2.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
                        <div class="rc-ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                        </div>
                    </div>
                    <div class="fp-content">
                        <a href="./recipe_detail-image.html"><img src="img/recipie/1/3.jpg" class="img-responsive"
                                alt="" /></a>
                        <h4><a href="./recipe_detail-image.html">Food Name</a></h4>
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