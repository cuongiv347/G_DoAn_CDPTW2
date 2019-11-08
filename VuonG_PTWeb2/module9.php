
<!DOCTYPE html>
<html ng-app = "myApp">
<head>
  <title>First Angularjs app</title>
  <meta name="author" content="Surjith S M">
  <meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
  <meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="css/plugin.css">
  <script src="js/angular.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Menu</h2>
<p>Tomato is a delicious restaurant website template</p>
</div>
</div>
</div>
</section>
  <div id="content" ng-controller="MainCtrl">

    
    <section class="menu space60">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="page-header wow fadeInDown">
                  <h1>List Style<small>These fine folks trusted the award winning restaurant.</small></h1>
               </div>
            </div>
         </div>
         <div class="food-menu wow fadeInUp">
            <div class="row">
               <div class="col-md-12">
                  <div class="menu-tags">
                     <label>MENU SEARCH:</label>
                     <input type='text' class="search" ng-model='searchText' placeholder=" ENGLISH ASPARAGUS " />
                  </div>
               </div>
            </div>
            <div class="row menu-items" >
               <div class="menu-item col-sm-6 col-xs-12 starter" ng-repeat='person in people | filter:searchText'>
                  <div class="clearfix menu-wrapper">
                     <h4>{{person.name}}</h4>
                     <span class="price">{{person.price}}</span>
                     <div class="dotted-bg"></div>
                  </div>
                  <p>{{person.desc}}</p>
               </div>
               
            </div>
         </div>
      </div>
   </section>

</div>

<script type="text/javascript">

   var app = angular.module('myApp' ,[]);

   app.controller("MainCtrl", function($scope){
      

     $scope.people = [
     {
      name:'ENGLISH ASPARAGUS',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
     name:'stuffed pancake',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
      name:'round sticky rice cake',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
      name:'steamed wheat flour cake',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
      name:'stuffed sticky rice cake',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
      name:'Soya noodles with chicken',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
      name:' ASPARAGUS',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
      name:'Sweet and sour fish broth ',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
      name:'Grilled fish',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   },
   {
      name:'pancako 3',
      price: '$14.95',
      desc: 'pellentesque enim. Aliquam tempor'
   }

   ]


});
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