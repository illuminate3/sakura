angular.module('mainController', [])

	.controller('mainController', function($scope, $http, Staff) {

		$scope.staffData = {};

		$scope.loading = true;
		console.log('I got this far! Fafnir!');

		Staff.get()
			.success(function(data) {
				$scope.staffs = data;
				$scope.loading = false;
				console.log($scope);
			});

		$scope.submitStaff = function() {
			$scope.loading = true;

			Staff.save($scope.staffData)
				.success(function(data) {

					Staff.get()
						.success(function(getData) {
							$scope.staffs = getData;
							$scope.loading = false;
						});
				})
				.error(function(x,e){
		            if(x.status==0){
		                console.log('You are offline!!\n Please Check Your Network.');
		            }else if(x.status==404){
		                console.log('Requested URL not found.');
		            }else if(x.status==500){
		                console.log('Internel Server Error.');
		            }else if(e=='parsererror'){
		                console.log('Error.\nParsing JSON Request failed.');
		            }else if(e=='timeout'){
		                console.log('Request Time out.');
		            }else {
		                console.log('Unknown Error.\n'+x.responseText);
		            }
				/*.error(function(data) {
					console.log(data);*/
				});
		};

		$scope.deleteStaff = function(id) {
			$scope.loading = true;

			Staff.destroy(id)
				.success(function(data) {

					Staff.get()
						.success(function(getData) {
							$scope.staffs = getData;
							$scope.loading = false;
						});
				});
		};
	});