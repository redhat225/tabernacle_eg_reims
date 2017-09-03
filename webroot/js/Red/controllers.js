angular.module('tabernacle.controllers',[])
		.controller('MainCtrl', ['$scope','$window','$anchorScroll','$location', function($scope,$window,$anchorScroll,$location){
		   var self = this;
		    angular.element(".button-collapse").sideNav({
                onOpen: function(el){
                    $('.brand-logo').fadeOut();
                },
                onClose: function(el){
                    $('.brand-logo').fadeIn();
                },
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true, // Choose whether you can drag to open on touch screens,
            });
		}])
		.controller('HomeCtrl', ['$scope', function($scope){
			var self = this;
			angular.element('.materialboxed').materialbox();
		  angular.element('.tooltipped').tooltip({delay:50});
		  angular.element('.scrollspy').scrollSpy();
		  angular.element('.carrousel-container').slick({
		          infinite: true,
		          slidesToShow: 1,
		          slidesToScroll: 1,
		          dots: false,
		          arrows:false,
		          autoplay:true,
		          fade: true,
		          dotsClass:'mg_prim_color mg_prim_background',
		          cssEase: 'linear',
		          pauseOnHover:false,
		          pauseOnFocus:false   
		   });
		   angular.element('.carousel').carousel({
		   	indicators:true
		   });

		   angular.element('.parallax').parallax();

		   angular.element('.container-img-1').slick({
			  infinite: true,
			  speed:500,
		      autoplay:true,
		      slidesToShow: 4,
		       slidesToScroll: 4,
		       adaptiveHeight: true,
		        focusOnSelect: true,
		         adaptiveHeight: true,
		      responsive: [

					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 3,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 2,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });
		   angular.element('.container-img-2').slick({
			  infinite: true,
			  speed:500,
		      autoplay:true,
		      slidesToShow: 4,
		       slidesToScroll: 4,
		       adaptiveHeight: true,
		        focusOnSelect: true,
		         adaptiveHeight: true,
		      responsive: [

					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 3,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 2,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

		   angular.element('.video-slick-container').slick({
			  infinite: true,
			  speed:500,
		      slidesToShow: 4,
		       slidesToScroll: 4,
		       adaptiveHeight: true,
		        focusOnSelect: true,
		         adaptiveHeight: true,
		         dots:true,
		      responsive: [

					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 3,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 2,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

		}])
		.controller('ContactCtrl', ['$scope', function($scope){
			var self =this;

		}])