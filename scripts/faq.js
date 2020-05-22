/*
File Name: faq.js
Date: 5/21/2019
Programmer: Michael Ledesma
*/

// The line below will test the link to the faq.js file. Comment it out when it works.
// alert("the link to the .js file is correct!");

// The line below will test the link to jquery.min.js . Comment it out when it works.
// if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

$(document).ready(function(){

    // alert("jQuery wrapper is functioning as intended!!");

    $("dd").hide();

    $("dt").on("click", function(){

        $(this).toggleClass("open").next().slideToggle();

    });

});