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
var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {

        $scope.date = new Date();
        $scope.name = "";
        $scope.time = "";
        $scope.email = "";
        $scope.guests = "";
        $scope.phone = "";
    });  
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