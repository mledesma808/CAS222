/*
File Name: week8.js
Date: 05/31/2020
Programmer: Michael Ledesma
*/

// The line below is to test your link to the .js file. Please comment it out when it works.
// alert("the link to the .js file is correct!");

// The line below is to test your link to the jquery.min.js file. Please comment it out when it works.
//if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

$(document).ready(function(){
    
    // alert("the jQuery code is running propertly!");

    var imageFolder = "../images/showcase/";

    var imageSource;

    var photoCaption;
    
    $("#bigPhoto").attr("src", imageFolder + "Happy_jogger.jpg");
    $("#bigPhoto").attr("alt", "Happy jogger");

    var thumbNames = ["Start_of_a_swim_race_small.jpg", "Differently_abled_foot_race_participant_small.jpg", "Swim_team_starts_the_race_small.jpg", "Cyclists_in_the_sun_small.jpg", "Happy_jogger_small.jpg", "Cyclists_cross_the_finish_line_small.jpg", "Sprinting_hard_small.jpg", "Aerial_view_of_a_marathon_small.jpg"];

    var bigNames = ["Start_of_a_swim_race.jpg", "Differently_abled_foot_race_participant.jpg", "Swim_team_starts_the_race.jpg", "Cyclists_in_the_sun.jpg", "Happy_jogger.jpg", "Cyclists_cross_the_finish_line.jpg", "Sprinting_hard.jpg", "Aerial_view_of_a_marathon.jpg"];

    const mq = window.matchMedia( "(min-width: 900px)" );

    $("img.thumbnail-inner").each(function(i) {
        (this).alt = thumbNames[i].replace(".jpg", "").replace("../images/showcase/", "").replace(/_/g, " ");
    });

    if (mq.matches) {
        $("img.thumbnail-inner").each(function (i) {

            (this).src = imageFolder + thumbNames[i];

        });
    } else {
        $("img.thumbnail-inner").each(function (i) {

            (this).src = imageFolder + bigNames[i];

        });
    }

    $("img.thumbnail-inner").on("click", function() {


        $("img").css("opacity", "1");

        $(this).css("opacity", "0.5");

        imageSource = $(this).attr("src");

        imageSource = imageSource.replace("_small", "");

        $("#bigPhoto").attr("src", imageSource);

        photoCaption = imageSource.replace(".jpg", "").replace("../images/showcase/", "").replace(/_/g, " ");

        $("#caption").text(photoCaption);

        $("#bigPhoto").attr("alt", photoCaption);

    })

});