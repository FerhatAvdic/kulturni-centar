<div class="container">
<div class="row">
    <div class="col-md-6 col-offset-md-3">
        <?php echo validation_errors(); ?>
        <?php echo form_open('shows/addpicture'); ?>  
        <div class="form-group">
            <label>Odaberi Predstavu</label>
            <select class="form-control" name="showid">
              <?php foreach ($shows as $shows_item): ?>
                <option >
                  <?php echo $shows_item['id'];?>
                </option>
                 <?php endforeach; ?>
             </select>
        </div>
        <div class="form-group">
            <label>Link Slike:</label>
        <input class="form-control" type="text" name="link">
        </div>
        <input type="submit" class="btn btn-primary" value="Dodaj sliku">
        </form>
    </div>
    </div>
</div>