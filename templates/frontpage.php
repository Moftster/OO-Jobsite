<?php include '../inc/header.php'; 

// var_dump($jobs);

// print_r($jobs);


?>

<div class="jumbotron">
  <h1>Find a job</h1>
  <form method="GET" action="index.php">
    <select name="category" class="form-control">
      <option value="0">Choose category</option>
      <?php foreach($categories as $category): ?>
        <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
      <?php endforeach; ?>
    </select>
    <br>
     <input type="submit" class="btn btn-success" value="Find">
  </form>
</div>

<?php foreach($jobs as $job): ?> 

<div class="row marketing">
  <div class="col-md-10">
    <h4><?php echo $job->job_title; ?></h4>
    <p><?php echo $job->description; ?></p>
  </div>
  <div class="col-md-2">
      <a href="" class="btn btn-danger">View</a>
  </div>
</div>

<?php endforeach; ?> 




<?php include '../inc/footer.php'; ?>