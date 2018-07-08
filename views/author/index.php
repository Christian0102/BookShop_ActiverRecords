<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>

<a href="<?php echo Url::to(['author/create']);?>"class="btn btn-primary ">Create a new Author</a>
<br>
<h1>Authors</h1>
<table class="table table-condensed">
	<tr>
		 <th>ID</th>
		 <th>Firstname</th>
		 <th>Lastname</th>
		 <th>Edit</th>
		 <th></th>
	</tr>	
<?php foreach($authorsList as $author):?>
	<tr>
		<td><?php echo $author->id;?></td>
		<td><?php echo $author->first_name;?></td>
		<td><?php echo $author->last_name;?></td>
		<td><a href="<?php echo Url::to(['author/update','id'=>$author->id]);?>"></td>
		<td></td>
	</tr>
<?php endforeach;?>
</table>

