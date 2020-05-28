<script>
    // instanciate new modal
    var logout = new tingle.modal({
                    footer: true,
                    stickyFooter: false,
                    closeMethods: ['overlay', 'escape'],
                    cssClass: ['custom-class-1', 'custom-class-2']
                });
                
    // set content
    logout.setContent("<h1>Keluar</h1><p>Anda telah berhasil keluar dan akan dipindahkan ke halaman Home</p>");
    
    // add a button
    logout.addFooterBtn('OK', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function() {
        // close
        logout.close();
        logout.destroy();
        window.location.replace(window.location.pathname);
    });
</script>
<?php
    session_destroy();
    
    echo '<script>logout.open();</script>';

    //header("Location: ?p=home");
?>