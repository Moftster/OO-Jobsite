<?php 

include_once 'config/init.php'; 

$job = new Job;

$template = new Template('templates/frontpage.php');

$template->title = 'Latest jobs';
$template->jobs = $job->getJobs();
$template->categories = $job->getCategories();

echo $template;

?>
