<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Foods.php";

$foods = Prod::create('/foods_db.json', 'Foods');
$games = Prod::create('/games_db.json', 'Games');
$accessories = Prod::create('/accessories_db.json', 'Accessories');
/* $games = Prod::create('/games', 'Games'); */
?>

<main>

    <!-- food section -->
    <section class="container">
        <h2>Cibo</h2>
        <div class="row"><?php foreach ($foods as $food): ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= $food->image ?>" class="card-img-top" alt="<?= $food->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $food->name ?></h5>
                            <p class="card-text"><?= $food->description ?></p>
                            <p class="card-text"><?= $food->category->name ?></p>
                            <p class="card-text"><i class="<?= $food->category->icon ?>"></i></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div><?php endforeach; ?>
        </div>
    </section>

    <!-- toys section -->
    <section>
        <h2>Giochi</h2>
        <div class="row">
        <?php foreach ($games as $game): ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= $game->image ?>" class="card-img-top" alt="<?= $game->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $game->name ?></h5>
                            <p class="card-text"><?= $game->description ?></p>
                            <p class="card-text"><?= $game->category->name ?></p>
                            <p class="card-text"><i class="<?= $game->category->icon ?>"></i></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div><?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- accessories section -->
    <section>
        <h2>Accessori</h2>
        <div class="row">
        <?php foreach ($accessories as $accessory): ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= $accessory->image ?>" class="card-img-top" alt="<?= $accessory->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $accessory->name ?></h5>
                            <p class="card-text"><?= $accessory->description ?></p>
                            <p class="card-text"><?= $accessory->category->name ?></p>
                            <p class="card-text"><i class="<?= $accessory->category->icon ?>"></i></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div><?php endforeach; ?>

            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . "/Views/footer.php"
    ?>