<div class="bg-recipe" style="background-image:url(<?php echo $img ?>)"></div>
<div class="container">
    <div class="recipe-detail">
        <div class="nav">
            <div><i class="fas fa-hamburger"></i></div>
            <div><i class="fab fa-youtube"></i></div>
            <div><i class="fas fa-shopping-basket"></i></div>
            <div><i class="fas fa-utensils"></i></div>
        </div>
        <div class="flex-grid">
            <div class="col" style="flex-grow:2">
                <h1><?php echo $title ?></h1>
                <p><?php echo $desc ?></p>
                <div class="gocip-youtube" data-id="<?php echo $youtube ?>"></div>
                <div class="ingredients">
                    <h2>Bahan-bahan</h2>
                    <?php 
                        foreach ($ingredient as $value){
                            echo "<div><a>".$value."</a></div>";
                        }
                    ?>
                </div>
                <div class="method-recipe">
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
b
            </div>
        </div>
    </div>
</div>