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

    // ---------- Switch Page on Setting Profile ---------- //
    // add animated zoom in on every pages
    $(".profile").addClass("animated zoomIn faster");

    // add click event on sidebar menu
    $(".sidebar a").click(function(){
        var getID = $(this).attr("id"); // get id from clicked sidebar 
        var pages = "#"+getID+"Content"; 

        // remove class active on all menu
        $(".sidebar a").removeClass("active");

        // add class active only on clicked menu
        $(this).addClass("active");
        
        // hide all pages
        $(".profile").hide();
        
        // show only pages selected
        $(pages).show();
    });
    // ---------- End Switch Page ---------- //

});

