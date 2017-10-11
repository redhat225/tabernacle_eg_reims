angular.module('tabernacle.controllers',[])
		.controller('MainCtrl', ['$rootScope','$scope','$window','$anchorScroll','$location','checkCookie', function($rootScope,$scope,$window,$anchorScroll,$location,checkCookie){
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

		    if(checkCookie.data.banner_state === "undone")
		        $rootScope.openModal = true;
		}])
		.controller('HomeCtrl', ['$scope','ProgramService', function($scope,ProgramService){
			var self = this;
			angular.element('.materialboxed').materialbox();
		    angular.element('.tooltipped').tooltip({delay:50});
		    angular.element('.scrollspy').scrollSpy();
		    angular.element('.carrousel-container').slick({
		          infinite: true,
		          slidesToShow: 1,
		          slidesToScroll: 1,
			      speed:1300,
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
		       slidesToScroll: 1,
		       adaptiveHeight: true,
		        focusOnSelect: true,
		      responsive: [

					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		    });

		    angular.element('.container-img-2').slick({
			  infinite: true,
			  speed:400,
		      autoplay:true,
		      slidesToShow: 4,
		       slidesToScroll: 1,
		       adaptiveHeight: true,
		        focusOnSelect: true,
		      responsive: [

					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
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
		        focusOnSelect: true,
		         centerMode:true,
		         dots:true,
		      responsive: [

					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        slidesToShow: 3,
		                slidesToScroll: 3,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        slidesToShow: 2,
		                slidesToScroll: 2,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		    });


		    //loading program
		    self.program = ProgramService;

		    self.get_program = function(page_set){
			    self.program.get(page_set).then(function(response){
			    	self.preloader_program = true;
			    	self.events = response.data.events;
			    	self.page_total = response.data.events_count;

		            self.events.forEach(function(element,index){
		                var months = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
		                for(let i in months)
		                {
		                	i++;
		                	console.log(i);
		                    if (i == parseInt(element.ref_month))
		                    {
		                        element.ref_month_full = months[i-1];
		                    }
		                }
		            });

			    	console.log(self.events);

			    }, function(errResponse){
			    	console.log(errResponse);
			    }).finally(function(){
			    	self.preloader_program = false;
			    });
		    };
		    self.page_set = 1;
		    self.get_program(self.page_set);


		}])
		.controller('ContactCtrl', ['$scope', function($scope){
			var self =this;

		}])
		.filter('cut', function () {
        return function (value, wordwise, max, tail) {
            if (!value) return '';

            max = parseInt(max, 10);
            if (!max) return value;
            if (value.length <= max) return value;

            value = value.substr(0, max);
            if (wordwise) {
                var lastspace = value.lastIndexOf(' ');
                if (lastspace !== -1) {
                  //Also remove . and , so its gives a cleaner result.
                  if (value.charAt(lastspace-1) === '.' || value.charAt(lastspace-1) === ',') {
                    lastspace = lastspace - 1;
                  }
                  value = value.substr(0, lastspace);
                }
            }

            return value + (tail || ' …');
        };
    })