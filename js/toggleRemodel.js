// JavaScript Document
function toggleRemodel(){
	 		"use strict";
		
			  $("#remodel").slideUp();
			
			  if(document.getElementById("remodel").classList.contains('visible')){
				 $("#remodel").slideUp(1500);
		 	     
				 $("#remodel").removeClass('visible');
				 //this is to remove the highlight for the button
				 document.getElementById("remodelbutton").classList.add('inactivefilter');
				 document.getElementById("remodelbutton").classList.remove('activefilter'); 
				 //fade out the pictures in the div
				 $(".remodelpictures").addClass('clear');
				 $(".remodelpictures").removeClass('opaque');
				
				 
		        }
				
			   else {
				 $("#remodel").fadeIn(1500).slideDown(1500);
			     $('#remodel').addClass('visible');
				 //this is to add the highlight for the corresponding button
				 document.getElementById("remodelbutton").classList.add('activefilter'); 
				 document.getElementById("remodelbutton").classList.remove('inactivefilter');
				 
				 
				 $(".remodelpictures").addClass('opaque');
				 $(".remodelpictures").removeClass('clear');
				
				}
			}