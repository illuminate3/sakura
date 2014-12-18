angular.module('staffService', [])

	.factory('Staff', function($http) {

		return {
			get : function() {
				return $http.get('api/staff');
			},

			save : function(staffData) {
				return $http({
					method: 'POST',
					url: 'api/staff',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(staffData)
				});
			},

			destroy : function(id) {
				return $http.delete('api/staff' + id);
			}
		}
	});