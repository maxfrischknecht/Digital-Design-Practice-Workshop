<?= $page->title() ?>

<?= $page->text() ?>

<?= $page->videourl() ?>

<?php foreach($page->images() as $misbild): ?>
	<a href="<?= $misbild->url() ?>">
	  <img src="<?= $misbild->url() ?>" alt="">
	</a>
<?php endforeach ?>
