//Accordian Action
var action = "click";
var speed = "500";

$(document).ready(function() {
    //Question handler
    $('li.q').on(action, function() {
        //gets next element
        //opens .a of selected question
        $(this).next().slideToggle(speed)
            //selects all other answers and slides up any open answer
            .siblings('li.a').slideUp();

        //Grab img from clicked question
        var img = $(this).children('i');
        //Remove Rotate class from all images except the active
        $('i').not(img).removeClass('rotate');
        //toggle rotate class
        img.toggleClass('rotate');
    });
});