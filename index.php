<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
	<script type="text/javascript" src="js/vlocity_core_assets.js"></script>
<script type="text/javascript" src="js/cardframework_assets.js"></script>
<script type="text/javascript" src="js/SldsAngular.js"></script>
<script type="text/javascript" src="js/cardframework.js"></script>
<script type="text/javascript" src="js/angular_strap_bundle_1_6.js"></script>

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
	<style>
        .test-container {margin:30px;font-size:30px;}
    </style> 
<body ng-app="miniApp">
<div ng-controller="ContactListCtrl" class='vlocity via-slds' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
			<div class='test-container'>
							<b>Try out Vlocity process library</b>
							<div ng-if='showCards'>
									<p>Vachindeeeeeeeee</p>
									<vloc-layout layout-name="billing-poc-container-layout"><vloc-layout>
							</div>
						</div>
</div>
</body>
</html>