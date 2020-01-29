<?php include '../inc/header.php'; ?>
 
    <h2 class="page-header">Edit job listing</h2>
    <form method="POST" action="edit.php?id=<?= $job->id; ?>">

        <div class="form-group">
            <label for="">Company</label>
            <input type="text" class="form-control" name="company" value="<?= $job->company; ?>">
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <select class="form-control" name="category_id" id="">
                <option value="0">Choose category</option>
            <?php foreach($categories as $category): ?>

                <?php if($job->category_id == $category->id): ?>
                    <option value="<?= $category->id; ?>" selected><?= $category->name; ?></option>
                <?php else: ?>
                    <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
                <?php endif; ?>

            <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
            <?php endforeach; ?>                
            </select>
        </div>

        <div class="form-group">
            <label for="">Job title</label>
            <input type="text" class="form-control" name="job_title" value="<?= $job->job_title; ?>">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control"><?= $job->description; ?></textarea>
        </div>

        <div class="form-group">
            <label for="">Location</label>
            <input type="text" class="form-control" name="location" value="<?= $job->location; ?>">
        </div>

        <div class="form-group">
            <label for="">Salary</label>
            <input type="text" class="form-control" name="salary" value="<?= $job->salary; ?>">
        </div>

        <div class="form-group">
            <label for="">Contact user</label>
            <input type="text" class="form-control" name="contact_user" value="<?= $job->contact_user; ?>">
        </div>

        <div class="form-group">
            <label for="">Contact email</label>
            <input type="text" class="form-control" name="contact_email" value="<?= $job->contact_email; ?>">
        </div>

        <input type="submit" class="btn btn-default" value="submit" name="submit">

    </form>

<?php include '../inc/footer.php'; ?>