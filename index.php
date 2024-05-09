<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Foods.php";

$foods = Prod::create('/foods_db.json', 'Foods');
/* $games = Prod::create('/games', 'Games'); */
?>

<main>

    <!-- food section -->
    <section class="container">
        <h2>Cibo</h2>
        <div class="row"><?php foreach ($foods as $food): ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= $food->img ?>" class="card-img-top" alt="<?= $food->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $food->name ?></h5>
                            <p class="card-text"><?= $food->description ?></p>
                            <p class="card-text"><?= $food->category ?></p>
                            <p class="card-text"><?php $food->id ?></p>
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
            <div class="col-12 col-md-4 col-lg-3">

            </div>
        </div>
    </section>

    <!-- accessories section -->
    <section>
        <h2>Accessori</h2>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . "/Views/footer.php"
    ?>