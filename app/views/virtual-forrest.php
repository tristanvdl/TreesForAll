<?php

?>
<section class="upper">
    <div class="logo-tree">
        <a href="index.php?action=onepage&name=<?php echo $name ?>"><img src="app/images/logo2.jpg" alt=""/></a>
        <span class="trees-amount">Geplante bomen: <?php echo $rows; ?></span>
    </div>
    <?php
    if ($data['has_clicked'] == 1) {
        ?>
        <div class="tree-clicked">
            <h3>Wil je nu ook echt doneren? Ga dan snel naar onze site.<br>
                Alle kleine beetjes helpen.</h3>
            <a target="new" href="https://www.treesforall.nl/winkelwagen.html">Doneer echt</a>
        </div>
        <?php
    } else {
        ?>
        <div class="wrapper-plant">
            <form action="index.php?action=upload-tree" method="post">
                <input type="hidden" name="username" value="<?php echo $name ?>">
                <input class="button-forrest" type="submit" value="Plant je eigen virtuele boom!">
            </form>
        </div>
        <?php
    }
    ?>
</section>
<hr class="seperation">
<section class="trees">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="trees">
                    <h3>
                        <?php
                        foreach ($finalArray as $tree) {
                            $final_name_forrest = explode(" ",$tree['username']);

                            echo '<div class="tree">';
                            echo '<span class="image-tree"><img src="app/images/' . $tree['image'] . '"></span><span class="user-name"><p>' . $final_name_forrest[0] . '</p></span>';
                            echo '</div>';
                        }
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>
