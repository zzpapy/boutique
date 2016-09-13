<?php
$managerCategory=new CategoryManager($db);

$categorys=$managerCategory->findAll();
$count=0;
$countP=0;
while($count<sizeof($categorys))
{
	$category=$categorys[$count];
	require('view/pro_offer_selectcat.phtml');
	$count++;
}
?>