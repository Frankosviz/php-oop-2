<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Foods.php";

$foods = Prod::create('/foods_db.json', 'Foods');
$games = Prod::create('/games', 'Games');
?>

<main class="container">

    <!-- food section -->
    <section>
        <h2>Cibo</h2>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
            <?php foreach($foods as $food) : ?>
                <div class="card d-flex">
                    <img src="<?= $food->img ?>" class="card-img-top" alt="<?= $food-> name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $food->name ?></h5>
                            <p class="card-text"><?= $food->description ?></p>
                            <p class="card-text"><?= $food->category ?></p>
                            <p class="card-text"><?php $food->id ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- toys section -->
    <section>
        <h2>gatti</h2>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

            </div>
        </div>
    </section>
    <section>
        <h2>pesci</h2>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

            </div>
        </div>
    </section>
    <section>
        <h2>uccelli</h2>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">

            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . "/Views/footer.php"
    ?>