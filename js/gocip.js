/* ----------------------------------------------- */
/*                  Go-Recipe  JS                  */
/*                 Copyrights 2019                 */
/* ----------------------------------------------- */

$(document).ready(function(){
    // ---------- Navbar ---------- //
    $(window).on("scroll",function(){
        if ($(window).scrollTop()){
            $(".top-header").hide();
            $(".bot-header").addClass("scrollme");
            $(".left-menu img").show(250);
        } else {
            $(".top-header").show();
            $(".bot-header").removeClass("scrollme");
            $(".left-menu img").hide();
        }
    });

    // show/hide search input
    $(".submit").click(function(){
        $("#frmsearch").fadeToggle(250);
    });
    
    // adding class 'active' to navbar based on current page
    var title = document.title.substr(12);
    $(".left-menu li a:contains("+title+")").addClass("active");
    // ---------- End Navbar ---------- //
});

