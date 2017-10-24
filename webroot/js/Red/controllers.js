angular.module('tabernacle.controllers',[])
		.controller('MainCtrl', ['$rootScope','$scope','$window','$anchorScroll','$location','checkCookie','NewsletterService', function($rootScope,$scope,$window,$anchorScroll,$location,checkCookie,NewsletterService){
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

		    //manage newsletter
		    self.renew_newsletter_object = function(){
			    self.newsletter_object = {
			    	newsletter_email:'',
			    	newsletter_uuid:'default'
			    };
		    };

		    self.renew_newsletter_object();

	        self.newsletter = function(newsletter_object){
	            self.is_newsletter_subscribing = true;
	            NewsletterService.subscribe(newsletter_object).then(function(response){
	                Materialize.toast('Félicitations, votre demande a été enregistrée',4000,'mg_prim_background white-text bold');
				    self.renew_newsletter_object();
	            }, function(errResponse){
	               switch(errResponse.status){
	                case 401:
	                    Materialize.toast('Cette adresse existe déjà',4000,'orange white-text bold');
	                break;

	                default:
	                   Materialize.toast('Une erreur est survenue, veuillez réessayer',4000,'orange white-text bold');
	                break;
	               }
	            }).finally(function(){
	                self.is_newsletter_subscribing = false;
	            });     
	        };



		}])
		.controller('HomeCtrl', ['$scope','ProgramService','JoinService','PosterService','TrainingService', function($scope,ProgramService,JoinService,PosterService,TrainingService){
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
				        arrows: false,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: false,
				        centerMode: true,
				        slidesToShow: 2,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: false,
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
				        arrows: false,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: false,
				        centerMode: true,
				        slidesToShow: 2,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: false,
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
		         arrows:false,
		         dots:true,
		      responsive: [

					{
				      breakpoint: 1024,
				      settings: {
				        arrows: false,
				        slidesToShow: 3,
		                slidesToScroll: 3,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: false,
				        slidesToShow: 2,
		                slidesToScroll: 2,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: false,
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
		                    if (i == parseInt(element.ref_month))
		                    {
		                        element.ref_month_full = months[i-1];
		                    }
		                }
		            });
			    }, function(errResponse){
			    	console.log(errResponse);
			    }).finally(function(){
			    	self.preloader_program = false;
			    });
		    };
		    self.page_set = 1;
		    self.get_program(self.page_set);
		    // subscriptions joinus
		    self.renew_service = function(){
			    self.service = {
					subscriber_fullname: '',
					subscriber_contact: '',
					subscriber_email: ''
			    };
		    };
		    self.renew_service();

		    $scope.options = {
		    	fr_number:{
		    	   phone: true,
            	   phoneRegionCode: 'FR'

		    	}
		    };

		    self.subscribe_service = function(service){
		    	self.join_service_is_running = true;
		    	   JoinService.subscribe(service).then(function(response){
		    		Materialize.toast('Félicitations votre requête a été enregistrée', 4000, 'mg_prim_background white-text bold');
		    		self.renew_service();
		    	}, function(errResponse){
		    		Materialize.toast('Une erreur est survenue', 4000, 'red white-text bold');
		    	}).finally(function(){
		    		self.join_service_is_running = false;
		    	});
		    };

		    // Get Poster

		    PosterService.get().then(function(response){
		    	self.poster = response.data.poster;

		    	if(self.poster.ref_month)
		    	{
			        var months = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
			        for(let i in months)
			        {
			             i++;
			                    if (i == parseInt(self.poster.ref_month))
			                    {
			                        self.poster.ref_month_full = months[i-1];
			                    }
			        }
			        self.display_poster = true;

		    	}else
		    	    self.display_poster = false;

		    }, function(errResponse){
		    	Materialize.toast('Une Erreur est survenue, veuillez recharger la page',4000,'red white-text bold');
		    });

		    //subscription training
		    self.renew_subscriber_training = function(){
			    self.subscriber_training = {
			    	training_title:'Retraite Spirituelle',
					subscriber_fullname: '',
					subscriber_contact: '',
					subscriber_email: ''
			    };
		    };
		    self.renew_subscriber_training();

		    self.subscription_training  = function(subscription){
			    self.is_training_subscribe = true;
			    TrainingService.subscribe(subscription).then(function(response){
			    	Materialize.toast('Félicitations votre demande a été prise en compte',4000,'mg_prim_background white-text bold');
			    	self.renew_subscriber_training();
			self.openTrainingModal = false;
			    }, function(errResponse){	
			    	Materialize.toast('Une erreur est survenue, veuillez réessayer',4000,'red white-text bold');
			    }).finally(function(){
			    	self.is_training_subscribe = false;
			    });
		    };

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