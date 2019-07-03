<div class="bg-recipe" style="background-image:url(<?php echo $img ?>)"></div>
<div id="detail-recipe" class="container">
    <div class="recipe-detail">
        <div class="container-nav">
            <div class="nav">
                <div id="titleNav"><i class="fas fa-hamburger"></i><span>Deskripsi</span></div>
                <div id="videoNav"><i class="fab fa-youtube"></i><span>Video</span></div>
                <div id="ingredientNav"><i class="fas fa-shopping-basket"></i><span>Bahan</span></div>
                <div id="methodNav"><i class="fas fa-utensils"></i><span>Cara Masak</span></div>
            </div>
        </div>
        <div class="flex-grid">
            <div id="recipe-content" class="col" style="flex-grow:2">
                <div id="titleRecipe">
                    <h1><?php echo $title ?></h1>
                </div>
                <div class="info">
                    <div class="flex-grid">
                        <div class="col"><i class="fas fa-pizza-slice"></i><?php echo $serve ?> Porsi</div>
                        <div class="col"><i class="fas fa-stopwatch"></i><?php echo $time ?> Menit</div>
                        <div class="col"><i class="fas fa-bell"></i><?php echo $difficult ?></div>
                        <div class="col"><i class="fas fa-star"></i></i><?php echo $star ?></div>
                    </div>
                </div>
                <div>
                    <p><?php echo $desc ?></p>
                </div>
                <div id="videoRecipe" class="video">
                    <h2>Video</h2>
                    <div class="gocip-youtube"><iframe src="https://www.youtube.com/embed/<?php echo $youtube ?>"></iframe></div>
                </div>
                <div id="ingredientRecipe" class="ingredients">
                    <h2>Bahan-bahan</h2>
                    <?php 
                        foreach ($ingredient as $value){
                            echo "<div><a>".$value."</a></div>";
                        }
                    ?>
                </div>
                <div id="methodRecipe" class="method-recipe">
                    <h2>Cara Memasak</h2>
                    <?php 
                        $i = 1;
                        foreach ($method as $value) {
                            echo "<p data-id='".$i."'>".$value."</p>";
                            $i++;
                        }
                    ?>
                </div>
            </div>
            <div class="col">
                <div class="right-detail">
                    <div class="item">
                        <button class="btn btn-fav">Favorit</button>
                    </div>
                    <div class="item">
                        <h3>Beri Rating</h3>
                        <fieldset class="rating">
                            <input type="radio" id="post_3_star5" name="rating" value="5" /><label class = "full" for="post_3_star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="post_3_star4half" name="rating" value="4 and a half" /><label class="half" for="post_3_star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="post_3_star4" name="rating" value="4" /><label class = "full" for="post_3_star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="post_3_star3half" name="rating" value="3 and a half" /><label class="half" for="post_3_star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="post_3_star3" name="rating" value="3" /><label class = "full" for="post_3_star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="post_3_star2half" name="rating" value="2 and a half" /><label class="half" for="post_3_star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="post_3_star2" name="rating" value="2" /><label class = "full" for="post_3_star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="post_3_star1half" name="rating" value="1 and a half" /><label class="half" for="post_3_star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="post_3_star1" name="rating" value="1" /><label class = "full" for="post_3_star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="post_3_starhalf" name="rating" value="half" /><label class="half" for="post_3_starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <div class="item">
                        <h3>Resep Populer</h3>
                    </div>
                    <div class="item">
                        <div class="recommend">
                            <a href="?p=detail_resep&r=bacem-ceker"><img src="img/recipe/bacem-ceker.jpg" alt="Bacem Ceker">Bacem Ceker</a>
                            <p>2145 dilihat, 1663 favorit</p>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=kroket-tahu"><img src="img/recipe/kroket-tahu.jpg" alt="Kroket Tahu">Kroket Tahu</a>
                            <p>4412 dilihat, 3234 favorit</p>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=gudeg"><img src="img/recipe/gudeg.jpg" alt="Gudeg">Gudeg</a>
                            <p>9155 dilihat, 7979 favorit</p>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=seblak-creamy-mie-bakso"><img src="img/recipe/seblak-creamy-mie-bakso.jpg" alt="Seblak Creamy Mie Bakso">Seblak Creamy Mie Bakso</a>
                            <p>7454 dilihat, 6346 favorit</p>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=kembung-goreng-kremes"><img src="img/recipe/kembung-goreng-kremes.jpg" alt="Kembung Goreng Kremes">Kembung Goreng Kremes</a>
                            <p>1023 dilihat, 902 favorit</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cat-banner" style="background-image:url('img/kebab.jpg');">
                            <h2><a href="#">KHAS LUAR NEGERI</a></h2>
                        </div>
                        <div class="cat-banner" style="background-image:url('img/minum.jpg');">
                            <h2><a href="#">MINUMAN</a></h2>
                        </div>
                        <div class="cat-banner" style="background-image:url('img/cookies.jpg');">
                            <h2><a href="#">KUE</a></h2>
                        </div>
                        <div class="cat-banner" style="background-image:url('img/meat.jpg');">
                            <h2><a href="#">OLAHAN DAGING</a></h2>
                        </div>
                        <div class="cat-banner" style="background-image:url('img/cuisine.jpg');">
                            <h2><a href="#">KHAS DAERAH</a></h2>
                        </div>
                        <div class="cat-banner" style="background-image:url('img/lumpia.jpg');">
                            <h2><a href="#">JAJANAN PASAR</a></h2>
                        </div>
                        <div class="cat-banner" style="background-image:url('img/soup.jpg');">
                            <h2><a href="#">SOUP</a></h2>
                        </div>
                        <div class="cat-banner" style="background-image:url('img/veget.jpg');">
                            <h2><a href="#">VEGETARIAN</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>