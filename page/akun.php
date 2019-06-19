<?php 
    // check if not login
    if ((!isset($_SESSION["login"])) || ($_SESSION["login"] == false)) {
        header("Location: ?p=login");
    }
?>
<script>
    $(".breadcrumb").append("<span class='separator'></span>");
    $(".breadcrumb").append("<a id='sub-breadcrumb'>Informasi Umum</a>")
</script>
<div class="container">
    <div class="flex-grid">
        <div class="col">
            <div class="sidebar animated zoomIn faster">
                <div class="profile">
                    <div class="img-profile">
                        <img src="img/user.jpg" alt="<?php echo $_SESSION["user"] ?>">
                    </div>
                    <h4><?php echo $_SESSION["user"] ?></h4>
                    <div class="flex-grid">
                        <div class="col sub-info">Favorit 8</div>
                        <div class="col sub-info">Komentar 271</div>
                    </div>
                </div>
                <ul>
                    <li><a href="javascript:void(0);" id="general" class="sidebar-selected"><i class="sidebar-icon fas fa-laptop"></i>Informasi Umum</a></li>
                    <li><a href="javascript:void(0);" id="password"><i class="sidebar-icon fas fa-unlock-alt"></i>Ubah Sandi</a></li>
                    <li><a href="javascript:void(0);" id="account"><i class="sidebar-icon fas fa-user"></i>Akun</a></li>
                    <li><a href="javascript:void(0);" id="fav"><i class="sidebar-icon fas fa-heart"></i>Favorit</a></li>
                    <li><a href="javascript:void(0);" id="help"><i class="sidebar-icon fas fa-question-circle"></i>Bantuan</a></li>
                </ul>
            </div>
        </div>
        <div class="col" style="flex-grow:3;">
            <div id="generalContent" class="pages" style="display:block;">
                <h2>Informasi Umum</h2>
                <form action="">
                    <div class="input-form">
                        <label for="firstname">Nama depan</label>
                        <input type="text" name="firstname" value="Kelvin" placeholder="Ketikkan nama depan" required>
                    </div>
                    <div class="input-form">
                        <label for="lastname">Nama belakang</label>
                        <input type="text" name="lastname" value="Reamur" placeholder="Ketikkan nama belakang" required>
                    </div>
                    <div class="input-form">
                        <label for="dob">Tanggal lahir</label>
                        <input type="date" name="dob" value="1995-04-01" style="width:150px" required>
                    </div>
                    <div class="input-form">
                        <label for="gender">Jenis kelamin</label>
                        <input type="radio" name="gender" checked>Laki-laki
                        <input type="radio" name="gender">Perempuan
                    </div>
                    <div class="input-form">
                        <label for="city">Kota</label>
                        <input type="text" name="city" value="Yogyakarta" placeholder="Kota asal" style="width:150px" required>
                    </div>
                    <div class="input-form">
                        <label for="picture">Foto profil</label>
                        <input type="file" name="picture" accept=".jpg, .jpeg, .png" style="width:250px">
                    </div>
                    <button class="btn" style="float:right">Simpan</button>
                </form>
            </div>
            <div id="passwordContent" class="pages">
                <h2>Ubah Sandi</h2>
                <form action="">
                    <div class="input-form">
                        <label for="oldpw">Kata sandi lama</label>
                        <input type="password" name="oldpw"  placeholder="Ketikkan kata sandi lama" style="width:200px" required>
                    </div>
                    <div class="input-form">
                        <label for="newpw">Kata sandi baru</label>
                        <input type="password" name="newpw" id="newpw"  placeholder="Ketikkan kata sandi baru" minlength="8" style="width:200px" required>
                        <p>Kata sandi terdiri minimal 8 karakter.<br>Disarankan terdiri dari huruf besar dan kecil serta kombinasi angka.</p>
                    </div>
                    <div class="input-form">
                        <label for="confirmpw">Ulangi kata sandi baru</label>
                        <input type="password" name="confirmpw" id="confirmpw" placeholder="Ketik ulang kata sandi" minlength="8" style="width:200px" required>
                        <p>Kata sandi yang diketikkan harus sama.</p>
                    </div>
                    <button class="btn" style="float:right">Simpan</button>
                </form>
            </div>
            <div id="accountContent" class="pages">
                <h2>Akun</h2>
                <form action="">
                    <div class="input-form">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="kelvinreamur" style="width:200px" disabled>
                        <p>Username ditentukan saat mendaftar dan tidak dapat diubah.</p>
                    </div>
                    <div class="input-form">
                        <label for="email">Alamat E-mail</label>
                        <input type="email" name="email" value="r.kelvin@gmail.com" placeholder="your@email.com" style="width:200px" required>
                    </div>
                    <div class="input-form">
                        <label for="telp">Nomor Telepon</label>
                        <input type="tel" name="telp" value="089901020304" placeholder="0811xxxxxxxx" value onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="13" style="width:200px" required>
                        <p>Nomor telepon dimulai dari angka 0.</p>
                    </div>
                    <button class="btn" style="float:right">Simpan</button>
                </form>
            </div>
            <div id="favContent" class="pages">
                <h2>Favorit</h2>
                <div class="fav-container">
                    <div class="fav-item">
                        <img src="img/recipe/kroket-tahu.jpg" alt="Kroket Tahu">
                        <div class="fav-caption">
                            <a href="#">Kroket Tahu</a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <img src="img/recipe/ayam-santan-bumbu-telur.jpg" alt="Ayam Santan Bumbu Telur">
                        <div class="fav-caption">
                            <a href="#">Ayam Santan Bumbu Telur</a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <img src="img/recipe/bacem-ceker.jpg" alt="Bacem Ceker">
                        <div class="fav-caption">
                            <a href="#">Bacem Ceker</a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <img src="img/recipe/gudeg.jpg" alt="Gudeg">
                        <div class="fav-caption">
                            <a href="#">Gudeg</a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <img src="img/recipe/kembung-goreng-kremes.jpg" alt="Kembung Goreng Kremes">
                        <div class="fav-caption">
                            <a href="#">Kembung Goreng Kremes</a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <img src="img/recipe/cookies-choco-pandan.jpg" alt="Cookies Choco Pandan">
                        <div class="fav-caption">
                            <a href="#">Cookies Choco Pandan</a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <img src="img/recipe/seblak-creamy-mie-bakso.jpg" alt="Seblak Creamy Mie Bakso">
                        <div class="fav-caption">
                            <a href="#">Seblak Creamy Mie Bakso</a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <img src="img/recipe/oatpancakeluar.jpg" alt="Oat Pancake">
                        <div class="fav-caption">
                            <a href="#">Oat Pancake</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="helpContent" class="pages">
                <h2>Bantuan</h2>
                <div class="help-account">
                    <h4>Merubah informasi</h4>
                    <p>Untuk merubah informasi pengguna dapat dilakukan di menu bagian Informasi Umum. Isikan nama depan, nama belakang, tanggal lahir, jenis kelamin, kota asal, dan foto profil. Untuk menyimpan tekan tombol simpan di sisi kanan bawah.</p>
                </div>
                <div class="help-account">
                    <h4>Kriteria foto profil</h4>
                    <p>Foto profil yang diperbolehkan adalah gambar dengan format *.jpg, *.jpeg, dan *.png. Disarankan ukuran resolusi minimal adalah 150x150px. Sebisa mungkin rasio gambar adalah 1:1.</p>
                </div>
                <div class="help-account">
                    <h4>Kata sandi</h4>
                    <p>Panjang kata sandi minimal 8 karakter dan disarankan terdiri dari kombinasi huruf besar(kapital), huruf kecil, dan angka. Jangan pernah memberitahukan kata sandi kepada orang lain.</p>
                </div>
                <div class="help-account">
                    <h4>Akun</h4>
                    <p>Informasi akun dapat dilihat di menu Akun. Username tidak dapat dirubah dan ditentukan saat pertama kali mendaftar. Alamat email dan nomor telepon dapat dirubah. Nomor telepon diawali dengan angka 0 dan maksimal 14 digit.</p>
                </div>
                <div class="help-account">
                    <h4>Favorit</h4>
                    <p>Menu favorit berisi daftar resep yang pengguna sukai. Diperoleh saat pengguna menekan tombol/icon love pada resep masakan tertentu. Favorit dapat dihapus dengan menekan tanda silang di pojok kanan atas.</p>
                </div>
                <div class="help-account">
                    <h4>Bantuan lain</h4>
                    <p>Untuk mendapatkan bantuan lain, silahkan hubungi kami pada kontak yang tersedia atau melalui media sosial.</p>
                </div>
            </div>
        </div>
    </div>
</div>
