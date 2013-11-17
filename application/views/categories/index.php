<div class="row-fluid">
  <div class="span12">
    <h3>Listing Categories</h3>
  </div>
</div>
<div class="row-fluid">
  <div class="span6">
    <a class="btn btn-primary" href="<?php echo site_url() . "/categories/add"; ?>">Add New Category</a>
  </div>
</div>
<div class="row-fluid">
  <div class="span12">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>
            Name
          </th>
          <th>
            Parent
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($categories as $category): ?>
        <tr>
          <td>
            <?php echo $category->name; ?>
          </td>
          <td>
            <?php
              if($category->parent)
              {
                echo "Parent";
              }
              else
              {
                echo "Child";
              }
            ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
