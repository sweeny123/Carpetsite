// JavaScript Document
function toggleResidential(){
	 		"use strict";
			
			  if(document.getElementById("commercial").classList.contains('visible')){
				 $("#commercial").fadeOut();
		 	     
				 $("#commercial").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("commercialbutton").classList.add('btn-secondary');
				 document.getElementById("commercialbutton").classList.remove('btn-primary'); 
				}
		
			  $("#residential").fadeOut();
			
			  if(document.getElementById("residential").classList.contains('visible')){
				 $("#residential").fadeOut();
		 	     
				 $("#residential").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("residentialbutton").classList.add('btn-secondary');
				 document.getElementById("residentialbutton").classList.remove('btn-primary'); 
				 //fade out the pictures in the div
				
				
				 
		        }
				
			   else {
				 $("#residential").fadeIn(1500).slideDown();
			     $('#residential').addClass('visible');
				 //this is to add the highlight for the corresponding button
				 document.getElementById("residentialbutton").classList.add('btn-primary'); 
				 document.getElementById("residentialbutton").classList.remove('btn-secondary');
				 
				 
				
				
				}
			}