<?php 
require 'utilities/header.php' ; 
require_once 'function.php';
$parfums = [
    'fraise' =>4,
    'Vanille'=>5,
    'Chocolat'=>3
];
$cornets =[
    'Pot' => 2,
    'Cornet' => 3
];
$supplements = [
    'Pépite de chocolat' => 1,
    'Chantilly' => .5
];
$ingredients = [];
$total = 0 ; 
if (isset($_GET['parfum'])) {
    foreach ($_GET['parfum'] as $parfum) {
        if(isset($parfums[$parfum])){
            $ingredients[] = $parfum;
            $total += $parfums[$parfum];
        };
    }
}
if (isset($_GET['supplement'])) {
    foreach ($_GET['supplement'] as $supplement) {
        if(isset($supplements[$supplement])){
            $ingredients[] = $supplement;
            $total += $supplements[$supplement];
        };
    }
}
if (isset($_GET['supplement'])) {
    $cornet = $_GET['cornet'];
        if(isset($cornets[$cornet])){
            $ingredients[] = $cornet;
            $total += $cornets[$cornet];
        };
    }

?>
<h1>composer votre glace</h1>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Votre glace</h5>
                <ul>
                    <?php foreach ($ingredients as $ingredient): ?>
                    <li><?= $ingredient ?> </li>
                    <?php endforeach?>
                </ul>
                <p><strong>Prix : </strong> <?= $total ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
    <form action="/jeu.php" method="GET" >
    <h3>Choisissez vos parfum</h3>
    <?php  foreach($parfums as $parfum => $prix): ?>
        <div class="checkbox">
            <label>
                <?= checkbox('parfum', $parfum, $_GET) ?>
                <?= $parfum ?> - <?= $prix ?> €
            </label>
        </div>
        <?php endforeach; ?>
        <h3>Choisissez votre cornet</h3>
        <?php  foreach($cornets as $cornet => $prix): ?>
            <div class="checkbox">
                <label>
                    <?= radio('cornet', $cornet, $_GET) ?>
                    <?= $cornet ?> - <?= $prix ?> €
                </label>
            </div>
            <?php endforeach; ?>
            <h3>Choisissez vos supplement</h3>
<?php  foreach($supplements as $supplement => $prix): ?>
    <div class="checkbox">
    <label>
        <?= checkbox('supplement', $supplement, $_GET) ?>
        <?= $supplement ?> - <?= $prix ?> €
    </label>
    </div>
<?php endforeach; ?>
    <button type="submit"  class="btn btn-primary" >composer la glace</button>
</form>

    </div>
</div>