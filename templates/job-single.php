<?php include '../inc/header.php'; ?>
 
    <h2 class="page-header"><?= $job->job_title; ?> (<?= $job->location; ?>)</h2>

    <small>Posted by <?= $job->contact_user; ?> on <?= $job->post_date; ?></small>
    <hr>
    <p class="lead"><?= $job->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company: </strong><?= $job->company; ?></li>
        <li class="list-group-item"><strong>Salary: </strong><?= $job->salary; ?></li>
        <li class="list-group-item"><strong>Email: </strong><?= $job->contact_email; ?></li>
    </ul>

    <br><br>
    <a href="index.php">Go back</a>
    <br><br>

<?php include '../inc/footer.php'; ?>