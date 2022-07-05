
<div class="form-group">
        <input hidden type="text" name="u_ctg_id" class="form-control" value="<?php echo $return_data['ctg_id']; ?>">
    </div>

    <div class="form-group">
        <label for="u_ctg_name">Category Name</label>
        <input type="text" name="u_ctg_name" class="form-control" value="<?php echo $return_data['ctg_name']; ?>">
    </div>
    <div class="form-group">
        <label for="u_ctg_des">Category Description</label>
        <input type="text" name="u_ctg_des" class="form-control" value="<?php echo $return_data['ctg_des']; ?>">
    </div>
    <input type="submit" value="Update Category" name="u_ctg_btn" class="btn btn-primary">

</form>