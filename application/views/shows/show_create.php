<div class="container">
<div class="row">
    <div class="col-md-6 col-offset-md-3">
        <?php echo validation_errors(); ?>
        <?php echo form_open('shows/create'); ?>  
        <div class="form-group">
            <label>Naziv:</label>
        <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label>Opis:</label>
        <textarea class="form-control" type="text" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Link Slike:</label>
        <input class="form-control" type="text" name="picture">
        </div>
        <div class="form-group">
            <label>Cijena:</label>
        <input class="form-control" type="text" name="price">
        </div>
        <input type="submit" class="btn btn-primary" value="Napravi Predstavu">
        </form>
    </div>
    </div>
</div>