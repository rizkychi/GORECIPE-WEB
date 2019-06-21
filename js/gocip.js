/* ----------------------------------------------- */
/*                  Go-Recipe  JS                  */
/*                 Copyrights 2019                 */
/* ----------------------------------------------- */

$(document).ready(function(){
    // ---------- Show/Hide Logout Menu ---------- //
    if (isLogin == true) {
        $("#logout").show();
    } else {
        $("#logout").hide();
    }
    // ---------- End Show/Hide Logout Menu ---------- //



    // ---------- Navbar ---------- //
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
    // ---------- End Navbar ---------- //



    // ---------- Show/Hide Language List ---------- //
    $("#language").click(function(){
        $(".list-language").fadeToggle(250);
    });
    // ---------- End Show/Hide Language List ---------- //



    // ---------- Switch Page on Setting Profile ---------- //
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
    // ---------- End Switch Page ---------- //



    // ---------- Confirm Password ---------- //
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
    // ---------- End Confirm Password ---------- //



    // ---------- Hide Favorite Recipe on Page: Account ---------- //
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
    // ---------- End Hide ---------- //



    // ---------- Breadcrumb ---------- //
    page_title = $('title').text().substr(12); //get page title
    
    separator = '<span class="separator"></span>'; // define separator '>'


    if (page_title == 'Akun') {
        // if page is akun
        bread = '<a href="?p='+page_title+'">'+page_title+'</a>';
        bread += separator;
        bread += "<a id='sub-breadcrumb'>Informasi Umum</a>";
    // } else if ($(location).attr("search").contains("detail_resep")) { 
    //     // if page is detail_resep
    //     bread = '<a href="?p=resep">Resep</a>';
    //     bread += separator;
    //     bread += '<a>'+page_title+'</a>';
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
    // ---------- End Simple Youtube Embedded ---------- //
   


    // ---------- HOMIE ---------- //
    // $(".cat-item li").mouseenter(function() {
    //     $(this).children("a").children("img").animate({ width: "210px", height: "215px" }, 300);
    //     $(this).children("a").children(".cat-name").fadeIn(200);

    // });

    // $(".cat-item li").mouseleave(function() {
    //     $(this).children("a").children("img").animate({ width: "200px", height: "200px" }, 300);
    //     $(this).children("a").children(".cat-name").fadeOut(200);
    // });

    $(".cat-item li").mouseenter(function() {
        $("img",this).addClass("img-hover");
        $(".cat-name",this).css("visibility","visible");
    });

    $(".cat-item li").mouseleave(function() {
        $("img",this).removeClass("img-hover");
        $(".cat-name",this).css("visibility","hidden");
    });

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
    if (slideIndex > slides.length) {slideIndex = 1}    
  
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 5000);
  }

// ----------------- End Slideshow ----------------- //