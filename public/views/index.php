<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Full Circle Supports Admin</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
		body 	{ padding-top: 30px; }
		form 	{ padding-bottom: 20px; }
		.staff	{ padding-bottom: 20px; }
	</style>

	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/angular.min.js"></script>

	<!-- Enter AgularJS -->
	<script src="js/controllers/mainController.js"></script>
	<script src="js/services/staffService.js"></script>
	<script src="js/app.js"></script>

</head>
<body class="container" ng-app="staffApp" ng-controller="mainController">
	<div class="col-md-8 col-md-offset-2">
		<div class="page-header">
			<h2>Staff App</h2>
			<h4>Test</h4>
		</div>
		<form ng-submit="submitStaff()">
			<div class="form-group">
				<input type="text" class="form-control input-sm" name="staffId" ng-model="staffData.staffId" placeholder="Employee Id">
			</div>
			<!--div class="form-group">
				<input type="text" class="form-control input-sm" name="username" ng-model="staffData.username" placeholder="Employee Log In">
			</div-->
			<div class="form-group">
				<input type="text" class="form-control input-sm" name="userName" ng-model="staffData.username" placeholder="Username">
			</div>

			<div class="form-group text-right">
				<button type="submit" class="btn btn-primary btn-lg">Submit</button>
			</div>
		</form>

	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

	<div class="staff" ng-hide="loading" ng-repeat="staff in staffs">
		<h3>Staff #{{ staff.staffId }} by {{ staff.email }}</h3>
		<p><a href="#" ng-click="deleteStaff(staff.id)" class="text-muted">Delete</a></p>
	</div>

	</div>
</body>
</html>