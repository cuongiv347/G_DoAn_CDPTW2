<!DOCTYPE html>
<html ng-app = "myApp">
<head>
    <title>First Angularjs app</title>
    <script src="js/angular.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/script.js" ></script>
</head>
<body>
    <div id="content" ng-controller="MainCtrl">

        <input type='text' ng-model='searchText' placeholder="Search a name like : Soheil or something " />

            <ul>
                <li ng-repeat='person in people | filter:searchText'> {{person.name}} </li>
            </ul>

    </div>




</body>
</html>