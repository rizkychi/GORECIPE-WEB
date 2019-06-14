/* ----------------------------------------------- */
/*                  Go-Recipe  JS                  */
/*                 Copyrights 2019                 */
/* ----------------------------------------------- */

$(document).ready(function(){
    // ---------- Navbar ---------- //
    var navtop = $(".bot-header").position().top;
    $(window).on("scroll",function(){
        if ($(window).scrollTop() > navtop){
            
            $(".bot-header").addClass("scrollme");
            $(".left-menu img").animate({width:"show"},350);
        } else {
            
            $(".bot-header").removeClass("scrollme");
            $(".left-menu img").animate({width:"hide"},350);
        }
    });

    // show/hide search input
    $(".submit").click(function(){
        $("#frmsearch").animate({width:"toggle"},350);
    });
    
    // adding class 'active' to navbar based on current page
    var title = document.title.substr(12);
    $(".left-menu li a:contains("+title+")").addClass("active");
    // ---------- End Navbar ---------- //
});

