<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
?>
<h1>/book-shop/index</h1>

<a href="<?php echo Url::to(['create'])?>" class="btn btn-primary">Create Book</a>
<br>
</br>

<?php foreach ($result as $book):?>

<div class="col-md-10">
	<h3><?php echo $book->name;?></h3>
	<p><?php echo $book->getDatePublished();?></p>
	<p><?php $book->getPublisherName();	?></p>
	<?php
	foreach($book->getAuthors() as $author):?>
	<p><?php echo $author->first_name. '' .$author->last_name;?></p>
	<?php endforeach;?>
	<hr>
	</div>
<?php endforeach;?>
