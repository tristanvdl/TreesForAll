<?php
$name = $_GET['name'];
if ($data['has_clicked'] == 1){
    ?>
    <a target="new" href="www.google.nl">Doneer echt</a>
    <?php
} else {
    ?>
    <form action="app/models/trees.php?name=<?php echo $name?>" method="post">
        <input type="submit" value="Plant een virtuele boom">
    </form>
    <?php
}
?>

<section>
    <?php
        foreach ($treeList as $tree){
            echo '<span class="tree">';
                echo $tree['username'];
                echo '<img src="app/images/tree.png">';
            echo '</span>';
        }
    ?>
</section>