// JavaScript Document
function toggleServices(){
	 		"use strict";
			  
			  if(document.getElementById("residential").classList.contains('visible')){
				 $("#residential").fadeOut();
		 	     
				 $("#residential").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("residentialbutton").classList.add('btn-secondary');
				 document.getElementById("residentialbutton").classList.remove('btn-primary'); 
				}
				
			  if(document.getElementById("commercial").classList.contains('visible')){
				 $("#commercial").fadeOut();
		 	     
				 $("#commercial").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("commercialbutton").classList.add('btn-secondary');
				 document.getElementById("commercialbutton").classList.remove('btn-primary'); 
				}
			  
			  $("#services").fadeOut();
			
			  if(document.getElementById("services").classList.contains('visible')){
				 $("#services").fadeOut();
		 	     
				 $("#services").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("servicesbutton").classList.add('btn-secondary');
				 document.getElementById("servicesbutton").classList.remove('btn-primary'); 
				 //fade out the pictures in the div
				 $(".servicespictures").addClass('clear');
				 $(".servicespictures").removeClass('opaque');
				
				 
		        }
				
			   else {
				 $("#services").fadeIn(1500).slideDown();
			     $('#services').addClass('visible');
				 //this is to add the highlight for the corresponding button
				 document.getElementById("servicesbutton").classList.add('btn-primary'); 
				 document.getElementById("servicesbutton").classList.remove('btn-secondary');
				 
				 
				 $(".servicespictures").addClass('opaque');
				 $(".servicespictures").removeClass('clear');
				
				}
			}