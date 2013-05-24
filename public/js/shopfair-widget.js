(function() {

// Localize jQuery variable
var jQuery;







/******** Load jQuery if not present *********/
if (window.jQuery === undefined || window.jQuery.fn.jquery !== '1.9.1') {
    var script_tag = document.createElement('script');
    script_tag.setAttribute("type","text/javascript");
    script_tag.setAttribute("src",
        "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js");
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
    var script_tag2 = document.createElement('script');
    script_tag2.setAttribute("type","text/javascript");
    script_tag2.setAttribute("src","http://localhost/shopfair/public/js/jquery.jcarousel.js");

    var jsscript = jQuery("<script>", { 
        type: "text/javascript", 
        src: "" 
    });
    (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag2);
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

        var css_link2 = $("<link>", { 
            rel: "stylesheet", 
            type: "text/css", 
            href: "http://localhost/shopfair/public/css/carousel/tango/skin.css" 
        });
        css_link2.appendTo('head'); 


       

        

        /******* Load HTML *******/
        var jsonp_url = "http://al.smeuh.org/cgi-bin/webwidget_tutorial.py?callback=?";
        var datatoinsert = '<ul id="mycarousel" class="jcarousel-skin-tango"><li><img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/75/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/57/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/77/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/58/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/72/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/58/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/69/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/60/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" /></li><li><img src="http://static.flickr.com/70/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" /></li></ul>';
        $.getJSON(jsonp_url, function(data) {
          $('#widget-content-shopfair').html(datatoinsert);

        });
        jQuery('#mycarousel').jcarousel();
        
    });
}

})(); // We call our anonymous function immediately