/* ----------------------------------------------- */
/*                  Go-Recipe  JS                  */
/*                 Copyrights 2019                 */
/* ----------------------------------------------- */

<<<<<<< HEAD
$(document).ready(function() {
=======
$(document).ready(function(){
    // ---------- Back to Top after page refresh ---------- //
        $(this).scrollTop(0);
    // ---------- End Back to Top after page refresh ---------- //



>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
    // ---------- Show/Hide Logout Menu ---------- //
        if (isLogin == true) {
            $("#logout").show();
        } else {
            $("#logout").hide();
        }
    // ---------- End Show/Hide Logout Menu ---------- //



    // ---------- Navbar ---------- //
<<<<<<< HEAD
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
=======
        $(window).on("scroll",function(){
            if ($(window).scrollTop()>=30){
                $(".bot-header").addClass("scrollme");
            } else {
                $(".bot-header").removeClass("scrollme");
            }
        });

        // show/hide search input
        $("#search").click(function(){
            $(".search").animate({height:"show"},350);
            $(".search input[name=search]").focus();
        });
        $(".search-close").click(function(){
            $(".search").animate({height:"hide"},350);
        });
        
        // adding class 'active' to navbar based on current page
        var title = document.title.substr(12);
        $(".right-menu li a:contains("+title+")").addClass("active");
>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
    // ---------- End Navbar ---------- //



    // ---------- Show/Hide Language List ---------- //
<<<<<<< HEAD
    $("#language").click(function() {
        $(".list-language").fadeToggle(250);
    });
=======
        $("#language").click(function(){
            $(".list-language").fadeToggle(250);
        });
>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
    // ---------- End Show/Hide Language List ---------- //



    // ---------- Switch Page on Setting Profile ---------- //
<<<<<<< HEAD
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

        // add breadcrumb
        $("#sub-breadcrumb").remove();
        $(".breadcrumb").append("<a id='sub-breadcrumb'>" + $("#" + getID).text() + "</a>");
    });
=======
        // add animated zoom in on every pages
        $(".pages").addClass("animated zoomIn faster");

        // add click event on sidebar menu
        $(".sidebar a").click(function(){
            var getID = $(this).attr("id"); // get id from clicked sidebar 
            var pages = "#"+getID+"Content"; 

            // remove class active on all menu
            $(".sidebar a").removeClass("sidebar-selected");

            // add class active only on clicked menu
            $(this).addClass("sidebar-selected");
            
            // hide all pages
            $(".pages").hide();
            
            // show only pages selected
            $(pages).show();

            // add breadcrumb
            $("#sub-breadcrumb").remove();
            $(".breadcrumb").append("<a id='sub-breadcrumb'>"+$("#"+getID).text()+"</a>");
        });
>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
    // ---------- End Switch Page ---------- //



    // ---------- Confirm Password ---------- //
<<<<<<< HEAD
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
=======
        var newpw = $("#newpw");
        var confirmpw = $("#confirmpw");

        // check password confirmation
        confirmpw.change(function(){
            if (newpw.val() != confirmpw.val()){
                confirmpw[0].setCustomValidity("Passwords Don't Match");
            } else {
                confirmpw[0].setCustomValidity("");
            }
        });
>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
    // ---------- End Confirm Password ---------- //



    // ---------- Hide Favorite Recipe on Page: Account ---------- //
<<<<<<< HEAD
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
=======
        $(".fav-item").append("<div class='fav-close'></div>");
        $(".fav-close").click(function(){
            var item = $(this).parent(".fav-item");

            // instanciate new modal
            var modal = new tingle.modal({
                footer: true,
                stickyFooter: false,
                closeMethods: ['overlay', 'escape'],
                cssClass: ['custom-class-1', 'custom-class-2']
            });
            
            // set content
            modal.setContent("<h1>Hapus Favorit</h1><p>Apakah anda yakin akan menghapus favorit resep berikut?</p><p>Nama resep : "+item.text()+"</p>");
            
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
                item.animate({width:"hide"},350);
            });
            
            // open modal
            modal.open();
        });
>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
    // ---------- End Hide ---------- //



    // ---------- Breadcrumb ---------- //
<<<<<<< HEAD
    page_title = $('title').text().substr(12); //get page title

    separator = '<span class="separator"></span>'; // define separator '>'


    if (page_title == 'Akun') {
        // if page is akun
        bread = '<a href="?p=' + page_title + '">' + page_title + '</a>';
        bread += separator;
        bread += "<a id='sub-breadcrumb'>Informasi Umum</a>";
        // } else if ($(location).attr("search").contains("detail_resep")) { 
        //     // if page is detail_resep
        //     bread = '<a href="?p=resep">Resep</a>';
        //     bread += separator;
        //     bread += '<a>'+page_title+'</a>';
    } else {
        //if page is normal
        bread = '<a href="?p=' + page_title + '">' + page_title + '</a>';
    }

    // define full breadcrumb
    full_bread = '<div class="container">' +
        '<div class="breadcrumb">' +
        '<a href="index.php">' +
        '<i class="fas fa-home"></i>' +
        '</a>' +
        separator + bread +
        '</div>' +
        '</div>';

    if (page_title != 'Login' && page_title != 'Daftar' && page_title != 'Home') {
        $(".content").prepend(full_bread);
    }
=======
        page_title = $('title').text().substr(12); //get page title
        
        separator = '<span class="separator"></span>'; // define separator '>'


        if (page_title == 'Akun') {
            // if page is akun
            bread = '<a href="?p='+page_title+'">'+page_title+'</a>';
            bread += separator;
            bread += "<a id='sub-breadcrumb'>Informasi Umum</a>";
        } else if ($(location).attr("search").contains("detail_resep")) { 
            // if page is detail_resep
            bread = '<a href="?p=resep">Resep</a>';
            bread += separator;
            bread += '<a>'+page_title+'</a>';
        } else {
            //if page is normal
            bread = '<a href="?p='+page_title+'">'+page_title+'</a>';
        }

        // define full breadcrumb
        full_bread = '<div class="container">'+
                        '<div class="breadcrumb">'+
                            '<a href="index.php">'+
                                '<i class="fas fa-home"></i>'+
                            '</a>'
                            +separator+bread+
                        '</div>'+
                    '</div>';

        if (page_title != 'Login' && page_title != 'Daftar' && page_title != 'Home') {
            $(".content").prepend(full_bread);
        }
>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
    // ---------- End Breadcrumb ---------- //


    // ---------- Simple Youtube Embedded ---------- //
        var div, n, v = document.getElementsByClassName("gocip-youtube");
        if (v) {
            for (n = 0; n < v.length; n++) {
                if (v[n].dataset.id !== undefined) {
                    div = document.createElement("div");
                    div.setAttribute("data-id", v[n].dataset.id);
                    div.innerHTML = youtubeThumb(v[n].dataset.id);
                    div.onclick = youtubeIframe;
                    v[n].appendChild(div);
                }
            }
        }

<<<<<<< HEAD
    function youtubeThumb(id) {
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function youtubeIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }
=======
        function youtubeThumb(id) {
            var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
                play = '<div class="play"></div>';
            return thumb.replace("ID", id) + play;
        }
        
        function youtubeIframe() {
            var iframe = document.createElement("iframe");
            var embed = "https://www.youtube.com/embed/ID?autoplay=1";
            iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "1");
            this.parentNode.replaceChild(iframe, this);
        }
>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
    // ---------- End Simple Youtube Embedded ---------- //



<<<<<<< HEAD
    // ---------- HOMIE ---------- //


    // ---------- END HOMIE ---------- //

});

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
=======
    // ---------- Sub Nav Detail Recipe Page ---------- //
        if ($(location).attr("search").contains("detail_resep")){
            // Scroll to Section on Click
            $(".recipe-detail .nav div").click(function(){
                var getID = "#" + $(this).attr("id");
                getID = getID.replace("Nav","Recipe");

                $("html, body").animate({
                    scrollTop: $(getID).offset().top - 57
                }, 750);
            });

            // Add class 'active' to Nav
            $(window).on("scroll",function(){
                if ($(window).scrollTop() > 10){
                    $(".recipe-detail .nav").addClass("scrolled");
                } else {
                    $(".recipe-detail .nav").removeClass("scrolled");
                }

                // list section            
                var div = ["title","video","ingredient","method"];

                // add class 'actives' to Nav when section is in view
                div.slice().forEach(function(x, index){
                    var id = $("#" + x + "Recipe");
                    var pos = $(window).scrollTop() + 65;
                    if (index == 0) {
                        var next = $("#" + div[index+1] + "Recipe");
                        if (pos >= 0 && pos < next.offset().top) {
                            $("#" + x + "Nav").addClass("actives");
                        } else {
                            $("#" + x + "Nav").removeClass("actives");
                        }
                    } else if (div.length - 1 != index && index != 0) {
                        var next = $("#" + div[index+1] + "Recipe");
                        if (pos >= id.offset().top && pos <= next.offset().top && !(pos < id.offset().top)) {
                            $("#" + x + "Nav").addClass("actives");
                        } else {
                            $("#" + x + "Nav").removeClass("actives");
                        }
                    } else {
                        if (pos >= id.offset().top) {
                            $("#" + x + "Nav").addClass("actives");
                        } else {
                            $("#" + x + "Nav").removeClass("actives");
                        }
                    }
                });
            });
        }
    // ---------- End Sub Nav Detail Recipe Page ---------- //
});

// ----------------- Slideshow ----------------- //
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 5000);
    }
// ----------------- End Slideshow ----------------- //

// ----------------- Animation On Scroll ----------------- //
    // function anime(parent) {
    //     // get all child id
    //     var arr = new Array();
    //     $('div',parent).each(function(){
    //         var ele = $(this).attr('id');
    //         if (ele != null) {
    //             arr.push(ele); 
    //         }
    //     }); 

    //     // add class 'animated' on scroll
    //     $(window).on("scroll",function(){
    //         var pos = $(window).scrollTop()+60;

    //         arr.slice().forEach(function(x) {
    //             var id = $("#" + x);

    //             if (pos > id.offset().top){
    //                 id.addClass("animated fast");
    //                 console.log(x)
    //             } else {
    //                 id.removeClass("animated fast");
    //             }
    //         });
    //     });
    // }
// ----------------- End Animation On Scroll ----------------- //
>>>>>>> 4038663f89b607bb67ccb774eee00c7ff6c185d9
