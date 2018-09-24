<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script>
    var component = angular.module('phonecatApp', []);
    component.controller('PhoneListController', function PhoneListController($scope) {
        $scope.repeat=[1,2,3,4,5,6];
    });
</script>
<html ng-app="phonecatApp">
<head>
</head>
<body ng-controller="PhoneListController">
<ul>
    <li ng-repeat="loop in repeat">
        <span>@{{loop}}</span>
     </li>
</ul>

</body>
</html>
<script>

</script>