angular.module('tabernacle.controllers',[])
		.controller('MainCtrl', ['$scope','$window', function($scope,$window){
		   var self = this;
		    angular.element(".button-collapse").sideNav({
                onOpen: function(el){
                    $('.brand-logo').fadeOut();
                },
                onClose: function(el){
                    $('.brand-logo').fadeIn();
                }
            });

            

		}])
		.controller('HomeCtrl', ['$scope', function($scope){
			var self = this;
		  angular.element('.tooltipped').tooltip({delay:50});
		  angular.element('.carrousel-container').slick({
		          infinite: true,
		          slidesToShow: 1,
		          slidesToScroll: 1,
		          dots: false,
		          arrows:false,
		          autoplay:true,
		          fade: true,
		          cssEase: 'linear',
		          pauseOnHover:false,
		          pauseOnFocus:false   
		   });
		   angular.element('.carousel').carousel({
		   	indicators:true
		   });

		   angular.element('.parallax').parallax();
		}])