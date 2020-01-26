<?php 

include_once 'config/init.php'; 

$job = new Job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category) {
    $template->jobs = $job->getByCategory($category);
} else {
    $template->title = 'Latest jobs';
    $template->jobs = $job->getJobs();
}


$template->categories = $job->getCategories();

echo $template;

?>
