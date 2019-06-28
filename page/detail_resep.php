<div class="bg-recipe" style="background-image:url(<?php echo $img ?>)"></div>
<div class="container">
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
                        <h3>Resep Populer</h3>
                    </div>
                    <div class="item">
                        <div class="recommend">
                            <a href="?p=detail_resep&r=bacem-ceker"><img src="img/recipe/bacem-ceker.jpg" alt="Bacem Ceker">Bacem Ceker</a>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=kroket-tahu"><img src="img/recipe/kroket-tahu.jpg" alt="Kroket Tahu">Kroket Tahu</a>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=gudeg"><img src="img/recipe/gudeg.jpg" alt="Gudeg">Gudeg</a>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=seblak-creamy-mie-bakso"><img src="img/recipe/seblak-creamy-mie-bakso.jpg" alt="Seblak Creamy Mie Bakso">Seblak Creamy Mie Bakso</a>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=kembung-goreng-kremes"><img src="img/recipe/kembung-goreng-kremes.jpg" alt="Kembung Goreng Kremes">Kembung Goreng Kremes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>