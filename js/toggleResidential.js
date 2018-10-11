// JavaScript Document
function toggleResidential(){
	 		"use strict";
			
			   if(document.getElementById("services").classList.contains('visible')){
				 $("#services").slideUp(1500);
		 	     
				 $("#services").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("servicesbutton").classList.add('btn-secondary');
				 document.getElementById("servicesbutton").classList.remove('btn-primary'); 
				}
				
			  if(document.getElementById("commercial").classList.contains('visible')){
				 $("#commercial").slideUp(1500);
		 	     
				 $("#commercial").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("commercialbutton").classList.add('btn-secondary');
				 document.getElementById("commercialbutton").classList.remove('btn-primary'); 
				}
		
			  $("#residential").slideUp();
			
			  if(document.getElementById("residential").classList.contains('visible')){
				 $("#residential").slideUp(1500);
		 	     
				 $("#residential").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("residentialbutton").classList.add('btn-secondary');
				 document.getElementById("residentialbutton").classList.remove('btn-primary'); 
				 //fade out the pictures in the div
				 $(".residentialpictures").addClass('clear');
				 $(".residentialpictures").removeClass('opaque');
				
				 
		        }
				
			   else {
				 $("#residential").fadeIn(1500).slideDown(1500);
			     $('#residential').addClass('visible');
				 //this is to add the highlight for the corresponding button
				 document.getElementById("residentialbutton").classList.add('btn-primary'); 
				 document.getElementById("residentialbutton").classList.remove('btn-secondary');
				 
				 
				 $(".residentialpictures").addClass('opaque');
				 $(".residentialpictures").removeClass('clear');
				
				}
			}