// JavaScript Document
function toggleServices(){
	 		"use strict";
		
			  $("#services").slideUp();
			
			  if(document.getElementById("services").classList.contains('visible')){
				 $("#services").slideUp(1500);
		 	     
				 $("#services").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("servicesbutton").classList.add('btn-secondary');
				 document.getElementById("servicesbutton").classList.remove('btn-primary'); 
				 //fade out the pictures in the div
				 $(".servicespictures").addClass('clear');
				 $(".servicespictures").removeClass('opaque');
				
				 
		        }
				
			   else {
				 $("#services").fadeIn(1500).slideDown(1500);
			     $('#services').addClass('visible');
				 //this is to add the highlight for the corresponding button
				 document.getElementById("servicesbutton").classList.add('btn-primary'); 
				 document.getElementById("servicesbutton").classList.remove('btn-secondary');
				 
				 
				 $(".servicespictures").addClass('opaque');
				 $(".servicespictures").removeClass('clear');
				
				}
			}