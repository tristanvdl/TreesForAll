<?php

$queryGetTrees = "SELECT * FROM trees";
$resultGetTrees = $mysqli->query($queryGetTrees);

$rows = $resultGetTrees->num_rows;

$treeList = array();

while ($tree = $resultGetTrees->fetch_assoc()) {
    $treeList[] = $tree;
}

$finalArray = array_reverse($treeList);
