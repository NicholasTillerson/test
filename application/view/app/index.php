<?php 
 $this->myinclude("app.layouts.header",compact('categories'))// we have to send this categories by this function view because it will required from traits > view not from here
// require_once('layouts/header.php')
// but if we use require once just like line 3 we dont have to send anything to it
?>

    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <?php foreach($articles as $article){ ?>
            <section class="col-md-4">
                <h2><?= $article['title'] ?></h2>
                <p><?= substr( $article['title'],0,140) ?></p>
                <p><a class="btn btn-primary" href="<?= $this->url('home/show/'.$article['id']) ?>" role="button">View details »</a></p>
            </section>
            <?php } ?>
        </section>
    </section>

<?php $this->myinclude("app.layouts.footer") ?>