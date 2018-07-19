<?php
use yii\helpers\ArrayHelper;

?>
<pre>
<?php $date = ArrayHelper::getColumn($model,'date_published');?>
<?php echo implode(',',$date);?>
