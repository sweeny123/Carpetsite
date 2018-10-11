// JavaScript Document
function toggleCommercial(){
		"use strict";
			  $("#commercial").slideUp();
			
			  if(document.getElementById("commercial").classList.contains('visible')){
				 $("#commercial").slideUp(1500);
		 	     
				 $("#commercial").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("commercialbutton").classList.add('btn-secondary');
				 document.getElementById("commercialbutton").classList.remove('btn-primary'); 
				 //fade out the pictures in the div
				 $(".commercialpictures").addClass('clear');
				 $(".commercialpictures").removeClass('opaque');
				
				 
		        }
				
			   else {
				 $("#commercial").fadeIn(1500).slideDown(1500);
			     $('#commercial').addClass('visible');
				 //this is to add the highlight for the corresponding button
				 document.getElementById("commercialbutton").classList.add('btn-primary'); 
				 document.getElementById("commercialbutton").classList.remove('btn-secondary');
				 
				 
				 $(".commercialpictures").addClass('opaque');
				 $(".commercialpictures").removeClass('clear');
				
				}
			}