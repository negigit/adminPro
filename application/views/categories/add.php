<div class="row-fluid">
  <div class="span6 offset6">
    <a class="btn btn-primary" href="<?php echo site_url() . "/categories/index"; ?>">Show All Categories</a>
  </div>
</div>
<div class="row-fluid">
  <div class="span6 offset3 well">
    <form class="form-horizontal" method="post" action="<?php echo site_url() . "/categories/save"?>">
      <fieldset>
        <legend>Add New Category</legend>
        <div class="controls-group">
          <label class="controls-label">Name</label>
          <div class="controls">
            <input type="text" name="name"/>
          </div>
        </div>
        <div class="controls-group">
          <label class="controls-label">Parent</label>
          <div class="controls">
            <select name="parent">
              <option value=1>Parent</option>
              <option value=0>Child</option>
            </select>
          </div>
        </div>
        <div class="form-actions">
          <input type="submit" value="Save Category"/>
        </div>
      </fieldset>
    </form>
  </div>
</div>

