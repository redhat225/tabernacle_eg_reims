angular.module('tabernacle-app',['ui.router','tabernacle.services','tabernacle.controllers','ui.materialize','cleave.js'])
		.run(['$rootScope', function($rootScope){
		    // Verifications Here
		    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
                $rootScope.preloader = true;
                if(toState.name==="app.contact")
                {
                    $rootScope.navbar_invisible = true;

                    console.log(toState);
                }
                else
                {
                    $rootScope.navbar_invisible = false;
                }
            });
            $rootScope.$on('$viewContentLoaded', function(event, toState, toParams, fromState, fromParams) {
                $rootScope.preloader = false;
            });

		}])
		.config(['$httpProvider','$urlRouterProvider','$stateProvider','$locationProvider', function($httpProvider,$urlRouterProvider,$stateProvider,$locationProvider){
				// Enabling Html5Mode
				$locationProvider.html5Mode(true);
			    $locationProvider.hashPrefix('!');

			    //routing file
			    $stateProvider.state('app',{
			    	url:'/',
			    	cache:false,
			    	abstract:true,
			    	views:{
			    		"":{
			    			template:'<ui-view/>',
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"newsletter":{
			    			templateUrl:"/element/newsletter",
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"footer":{
			    			templateUrl:'/element/footer',
			    			controller:'MainCtrl as mainctrl'
			    		}
			    	},
			    	resolve:{
			    		checkCookie: ['CookieService','$state', function(CookieService,$state){
			    			return CookieService.check().then(function(response){
			    				return response;
			    			}, function(errResponse){
			    				Materialize.toast('Une erreur est survenue', 4000,'red mg-bold white-text')
			    				$state.go('app.home');
			    			});
			    		}]
			    	}

			    })
			    .state('app.home',{
			    	url:'home',
			    	cache:false,
			    	templateUrl:'/home/home',
			    	controller:'HomeCtrl as homectrl'
			    })
			    .state('app.contact',{
			    	url:'contact',
			    	cache:false,
			    	templateUrl:'/home/contact',
			    	controller:'ContactCtrl as contactctrl'
			    });


			    $urlRouterProvider.otherwise('home');


				// //Custom Setting $httpProvider
				$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
		}])