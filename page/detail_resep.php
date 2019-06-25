<div class="bg-recipe" style="background-image:url(<?php echo $img ?>)"></div>
<div class="container">
    <div class="recipe-detail">
        <div class="nav">
            <div id="titleNav" class="actives"><i class="fas fa-hamburger"></i></div>
            <div id="videoNav"><i class="fab fa-youtube"></i></div>
            <div id="ingredientNav"><i class="fas fa-shopping-basket"></i></div>
            <div id="methodNav"><i class="fas fa-utensils"></i></div>
        </div>
        <div class="flex-grid">
            <div id="recipe-content" class="col" style="flex-grow:2">
                <div id="titleRecipe">
                    <h1><?php echo $title ?></h1>
                </div>
                <div>
                    <p><?php echo $desc ?></p>
                </div>
                <div id="videoRecipe" class="video">
                    <h2>Video</h2>
                    <div class="gocip-youtube" data-id="<?php echo $youtube ?>"></div>
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
                        <h3>Resep Terkait</h3>
                    </div>
                    <div class="item">
                        <div class="recommend">
                            <a href="?p=detail_resep&r=bacem-ceker"><img src="img/recipe/bacem-ceker.jpg" alt="Bacem Ceker">Bacem Ceker</a>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=bacem-ceker"><img src="img/recipe/bacem-ceker.jpg" alt="Bacem Ceker">Bacem Ceker</a>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=bacem-ceker"><img src="img/recipe/bacem-ceker.jpg" alt="Bacem Ceker">Bacem Ceker</a>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=bacem-ceker"><img src="img/recipe/bacem-ceker.jpg" alt="Bacem Ceker">Bacem Ceker</a>
                        </div>
                        <div class="recommend">
                            <a href="?p=detail_resep&r=bacem-ceker"><img src="img/recipe/bacem-ceker.jpg" alt="Bacem Ceker">Bacem Ceker</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>