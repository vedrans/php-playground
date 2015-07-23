<?php
$this->breadcrumbs=array(
	'News',
);
include (Yii::app()->basePath."/extensions/menu/sideMenu.php");
?>

<h1>News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
