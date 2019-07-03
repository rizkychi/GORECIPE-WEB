/* ----------------------------------------------- */
/*                  Go-Recipe  JS                  */
/*                 Copyrights 2019                 */
/* ----------------------------------------------- */

$(document).ready(function() {
    // ---------- Back to Top after page refresh ---------- //
    $(this).scrollTop(0);
    // ---------- End Back to Top after page refresh ---------- //



    // ---------- Show/Hide Logout Menu ---------- //
    if (isLogin == true) {
        $("#logout").show();
    } else {
        $("#logout").hide();
    }
    // ---------- End Show/Hide Logout Menu ---------- //



    // ---------- Navbar ---------- //

    $(window).on("scroll", function() {
        if ($(window).scrollTop() >= 30) {
            $(".bot-header").addClass("scrollme");
        } else {
            $(".bot-header").removeClass("scrollme");
        }
    });

    // show/hide search input
    $("#search").click(function() {
        $(".search").animate({ height: "show" }, 350);
        $(".search input[name=search]").focus();
    });
    $(".search-close").click(function() {
        $(".search").animate({ height: "hide" }, 350);
    });

    // adding class 'active' to navbar based on current page
    var title = document.title.substr(12);
    $(".right-menu li a:contains(" + title + ")").addClass("active");

    $(window).on("scroll", function() {
        if ($(window).scrollTop() >= 30) {
            $(".bot-header").addClass("scrollme");
        } else {
            $(".bot-header").removeClass("scrollme");
        }
    });

    // show/hide search input
    $("#search").click(function() {
        $(".search").animate({ height: "show" }, 350);
        $(".search input[name=search]").focus();
    });
    $(".search-close").click(function() {
        $(".search").animate({ height: "hide" }, 350);
    });

    // adding class 'active' to navbar based on current page
    var title = document.title.substr(12);
    $(".right-menu li a:contains(" + title + ")").addClass("active");
    // ---------- End Navbar ---------- //



    // ---------- Show/Hide Language List ---------- //
    $("#language").click(function() {
        $(".list-language").fadeToggle(250);
    });
    // ---------- End Show/Hide Language List ---------- //



    // ---------- Switch Page on Setting Profile ---------- //
    // add animated zoom in on every pages
    $(".pages").addClass("animated zoomIn faster");

    // add click event on sidebar menu
    $(".sidebar a").click(function() {
        var getID = $(this).attr("id"); // get id from clicked sidebar 
        var pages = "#" + getID + "Content";

        // remove class active on all menu
        $(".sidebar a").removeClass("sidebar-selected");

        // add class active only on clicked menu
        $(this).addClass("sidebar-selected");

        // hide all pages
        $(".pages").hide();

        // show only pages selected
        $(pages).show();
    });
    // ---------- End Switch Page ---------- //



    // ---------- Confirm Password ---------- //
    var newpw = $("#newpw");
    var confirmpw = $("#confirmpw");

    // check password confirmation
    confirmpw.change(function() {
        if (newpw.val() != confirmpw.val()) {
            confirmpw[0].setCustomValidity("Passwords Don't Match");
        } else {
            confirmpw[0].setCustomValidity("");
        }
    });
    // ---------- End Confirm Password ---------- //



    // ---------- Hide Favorite Recipe on Page: Account ---------- //
    $(".fav-item").append("<div class='fav-close'></div>");
    $(".fav-close").click(function() {
        var item = $(this).parent(".fav-item");

        // instanciate new modal
        var modal = new tingle.modal({
            footer: true,
            stickyFooter: false,
            closeMethods: ['overlay', 'escape'],
            cssClass: ['custom-class-1', 'custom-class-2']
        });

        // set content
        modal.setContent("<h1>Hapus Favorit</h1><p>Apakah anda yakin akan menghapus favorit resep berikut?</p><p>Nama resep : " + item.text() + "</p>");

        // add a button
        modal.addFooterBtn('Batal', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function() {
            // close
            modal.close();
            modal.destroy();
        });

        // add button
        modal.addFooterBtn('Hapus', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function() {
            // close
            modal.close();
            // hide
            item.animate({ width: "hide" }, 350);
        });

        // open modal
        modal.open();
    });
    // ---------- End Hide ---------- //


    //--------- RESEP ----------//

    $('#kanan-btn').click(function() {
        //event.preventDefault();
        $('#ctg-content').animate({
            scrollLeft: "+=100px"
        }, "medium");
    });

    $('#kiri-btn').click(function() {
        //event.preventDefault();
        $('#ctg-content').animate({
            scrollLeft: "-=100px"
        }, "medium");
    });
    //--------- END RESEP ----------//

    // ---------- Sub Nav Detail Recipe Page ---------- //
    if ($(location).attr("search").includes("detail_resep")) {
        // Scroll to Section on Click
        $(".recipe-detail .nav div").click(function() {
            var getID = "#" + $(this).attr("id");
            getID = getID.replace("Nav", "Recipe");

            $("html, body").animate({
                scrollTop: $(getID).offset().top - 57
            }, 0);
        });

        // Show info on hover 
        $(".recipe-detail .nav div").hover(function() {
            $("span", this).animate({ 'width': 'toggle' }, 350);
        });
    }
    // ---------- End Sub Nav Detail Recipe Page ---------- //
});
// ----------------- Article Slideshow -------------- //
    function showSlide(n){
        var i;
        var slides = document.getElementsByClassName("slide-foto");
        var dots = document.getElementsByClassName("titik");
        
        if (n > slides.length) { 
            slideIndex = 1
        }
        
        if (n < 1) { 
            slideIndex = slides.length
        }
        
        for (i=0;i<slides.length;i++) {
            slides[i].style.display = "none";
        }
        
        for (i=0;i<dots.length;i++) {
            dots[i].className = dots[i].className.replace(" active","");
        }
        
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
    
    function plusSlides(n){
        showSlide(slideIndex += n);
    }
    
    function currentSlide(n) {
        showSlide(slideIndex = n);
    }
    
    

// ----------------- Slideshow ----------------- //
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) { slideIndex = 1 }

    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000);
}
// ----------------- End Slideshow ----------------- //