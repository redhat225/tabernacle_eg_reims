angular.module('tabernacle.services',[])
		.factory('JoinService',['$http','$q', function($http,$q){
			return{
				subscribe: function(subscription){
					return $http.post('/home/joinus',subscription).then(function(response){
						return response;
					}, function(errResponse){
						return $q.reject(errResponse);
					});
				}
			};
		}])
		.factory('CookieService',['$http','$q', function($http,$q){
			return{
				check: function(){
					return $http.get('/home/bannerState').then(function(response){
						return response;
					}, function(errResponse){
						return $q.reject(errResponse);
					});
				}
			}
		}]).factory('ProgramService',['$http','$q', function($http,$q){
			return{
				get:function(page_set){
					return $http.get('/home/program',{params:{'page':page_set}}).then(function(response){
						return response;
					}, function(errResponse){
						return $q.reject(errResponse);
					});
				}
			}
		}])
		.factory('PosterService',['$http','$q', function($http,$q){
			return{
				get:function(){
					return $http.get('/home/poster').then(function(response){
						return response;
					}, function(errResponse){
						return $q.reject(errResponse);
					});
				}
			}
		}])
		.factory('NewsletterService',['$http','$q', function($http,$q){
			return{
				subscribe: function(newsletter){
					return $http.post('/newsletter/subscribe',newsletter)
									.then(function(response){
										return response;
									}, function(errResponse){
										return $q.reject(errResponse);
									});
				}
			}
		}])
		.factory('TrainingService',['$http','$q', function($http,$q){
			return{
				subscribe: function(subscriber){
					return $http.post('/training/subscribe',subscriber)
									.then(function(response){
										return response;
									}, function(errResponse){
										return $q.reject(errResponse);
									});
				}
			}
		}])