// JavaScript Document
function toggleResidential(){
	 		"use strict";
		
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