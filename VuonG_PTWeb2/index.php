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
    <script src="js/module5-6.js"></script>

</head>

<body>
       
    <?php include './module5.php'; ?>
    <?php include './module6.php';?>
    <script type="text/javascript">
        $(function() {
        SyntaxHighlighter.all();
    });
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            rtl: true,
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>
    <script type="text/javascript">
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {

        $scope.date = new Date();
        $scope.name = "";
        $scope.time = "";
        $scope.email = "";
        $scope.guests = "";
        $scope.phone = "";
    });  
    </script>
     <script type="text/javascript">
         var modal = document.getElementById("myModal");
var btn = document.getElementById("js-reservation-btn");
var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }    
     </script>

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