
(function() {

// Localize jQuery variable
var jQuery;

/******** Load jQuery if not present *********/
if (window.jQuery === undefined || window.jQuery.fn.jquery !== '1.4.2') {
    var script_tag = document.createElement('script');
    script_tag.setAttribute("type","text/javascript");
    script_tag.setAttribute("src",
        "http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js");
    if (script_tag.readyState) {
      script_tag.onreadystatechange = function () { // For old versions of IE
          if (this.readyState == 'complete' || this.readyState == 'loaded') {
              scriptLoadHandler();
          }
      };
    } else {
      script_tag.onload = scriptLoadHandler;
    }
    // Try to find the head, otherwise default to the documentElement
    (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);

    var script_tag2 = document.createElement('script');
    script_tag2.setAttribute("type","text/javascript");
    script_tag2.setAttribute("src","http://46.23.76.180/shopfair/js/SimpleCarousel.js");
    (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag2);
    
} else {
    // The jQuery version on the window is the one we want to use
    jQuery = window.jQuery;
    main();
}

/******** Called once jQuery has loaded ******/
function scriptLoadHandler() {
    // Restore $ and window.jQuery to their previous values and store the
    // new jQuery in our local jQuery variable
    jQuery = window.jQuery.noConflict(true);

    
    // Call our main function
    main(); 
}

/******** Our main function ********/
function main() { 
    jQuery(document).ready(function($) { 
        

        /******* Load CSS *******/
        var css_link = $("<link>", { 
            rel: "stylesheet", 
            type: "text/css", 
            href: "http://localhost/shopfair/public/css/shopfair-widget.css" 
        });
        css_link.appendTo('head');

        

        /******* Load HTML *******/
        var jsonp_url = "http://al.smeuh.org/cgi-bin/webwidget_tutorial.py?callback=?";
        $.getJSON(jsonp_url, function(data) {
          $('#shopfairwidgetcontent').html("This data comes from another server: " + data.html);
        });

        $("ul.example1").simplecarousel({
            width:40,
            height:40,
            visible: 3,
            auto: 3000,
            next: $('.next'),
            prev: $('.prev')
        });
    });
}

})(); // We call our anonymous function immediately