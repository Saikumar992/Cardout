<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
	<script type="text/javascript" src="js/vlocity_core_assets.js"></script>
<script type="text/javascript" src="js/CardFramework_Assets.js"></script>
<script type="text/javascript" src="js/SldsAngular.js"></script>
<script type="text/javascript" src="js/CardFramework.js"></script>
<script>
        angular.module('miniApp', ["forceng", 'vlocity', 'CardFramework'])
            .controller('ContactListCtrl', function ($scope, force, $location) { 
               // $scope.showLink = false;
			   $scope.showCards = false;
                
                force.init({
                    proxyURL: 'https://omniproxy.herokuapp.com'
                });
                force.login().then(function (oauth) {
                    debugger;
                    console.log("force login"); 
                    //$scope.showLink = true; 
					$scope.showCards = true; 
                });
            });
    
    </script> 
<body>

<p>Vachindeee</p>
<vloc-layout layout-name="billing-poc-container-layout"><vloc-layout>
</body>
</html>