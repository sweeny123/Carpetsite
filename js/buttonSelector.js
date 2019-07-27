// JavaScript Document



function buttonSelector()
{
	"use strict";
	
	
	

	var buttonvalue = parent.document.URL.substring(parent.document.URL.indexOf('?')+1, parent.document.URL.length);//gets the value after the ? in the url as a string
	
	var buttonvalueinteger = parseInt(buttonvalue);
	$("#residential").hide().slideUp();
	$("#services").hide().slideUp();
	$("#commercial").hide().slideUp();
	
	switch(buttonvalueinteger){
		
		case 1 :
			$("#residential").fadeIn(1800).slideDown(1500);
			$('#residential').addClass('visible');
			//this is to add the highlight for the corresponding button
			document.getElementById("residentialbutton").classList.add('btn-primary'); 
			document.getElementById("residentialbutton").classList.remove('btn-secondary');
			//this fades in the pictures 
			$(".residentialpictures").addClass('opaque');
			$(".residentialpictures").removeClass('clear');
			break;
	
		case 2 :
			$("#commercial").fadeIn(1800).slideDown(1500);
			$('#commercial').addClass('visible');
			//this is to add the highlight for the corresponding button
			document.getElementById("commercialbutton").classList.add('btn-primary'); 
			document.getElementById("commercialbutton").classList.remove('btn-secondary');
			//this fades in the pictures 
			$(".commercialpictures").addClass('opaque');
			$(".commercialpictures").removeClass('clear');	
			
			break;
	
		case 3 :
			$("#services").fadeIn(1800).slideDown(1500);
			$('#services').addClass('visible');
			//this is to add the highlight for the corresponding button
			document.getElementById("servicesbutton").classList.add('btn-primary'); 
			document.getElementById("servicesbutton").classList.remove('btn-secondary');
			//this fades in the pictures 
			$(".servicespictures").addClass('opaque');
			$(".servicespictures").removeClass('clear');	
			
			break;
	
	}
}