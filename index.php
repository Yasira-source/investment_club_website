<?php include_once 'config/init.php';?>

<?php

$investment = new Investment;

$template = new Template('templates/finano/frontpage.php');
$template->firstpage = $investment->getFrontPage();

$template->title = "ssuna";
echo $template;