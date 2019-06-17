/* ----------------------------------------------- */
/*                  Go-Recipe  JS                  */
/*                 Copyrights 2019                 */
/* ----------------------------------------------- */

$(document).ready(function(){
    // ---------- Navbar ---------- //
    $(window).on("scroll",function(){
        if ($(window).scrollTop()){
            $(".top-header").animate({height:'hide'},350);
            $(".bot-header").addClass("scrollme");
        } else {
            $(".top-header").animate({height:'show'},350);
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
    $(".fav-item").click(function(e){
        var item = $(this);
        if (!(e.offsetX > e.target.offsetLeft)) {
            // instanciate new modal
            var modal = new tingle.modal({
                footer: true,
                stickyFooter: false,
                closeMethods: ['overlay', 'escape'],
                cssClass: ['custom-class-1', 'custom-class-2'],
                beforeClose: function() {
                    // here's goes some logic
                    // e.g. save content before closing the modal
                    return true; // close the modal
                    return false; // nothing happens
                }
            });
            
            // set content
            modal.setContent("<h1>Hapus Favorit</h1><p>Apakah anda yakin akan menghapus favorit resep berikut?</p><p>Nama resep : "+$(this).text()+"</p>");
            
            // add a button
            modal.addFooterBtn('Batal', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function() {
                // close
                modal.close();
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
        }
    });
    // ---------- End Hide ---------- //
});

