<?php


/* @var $this yii\web\View */
?>
<h1>/book-shop/index</h1>

<p>
    You may change the content of th;is page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
<?php foreach ($result as $book):?>

<div class="col-md-10">
	<h3><?php echo $book->name;?></h3>
	<p><?php echo $book->getDatePublished();?></p>
	<p><?php
	$publisher = $book->getPublisher();
	?></p>
	<hr>
	</div>
<?php endforeach;?>
