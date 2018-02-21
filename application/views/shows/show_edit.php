<div class="container">
<div class="row">
    <div class="col-md-6 col-offset-md-3">
        <?php echo validation_errors(); ?>
        <?php echo form_open('shows/edit/'.$shows_item['id']); ?>  
        <div class="form-group">
            <label>Naziv:</label>
        <input class="form-control" type="text" name="title" value="<?php echo $shows_item['title']; ?>">
        </div>
        <div class="form-group">
            <label>Opis:</label>
        <textarea class="form-control" type="text" name="description"><?php echo $shows_item['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Link Slike:</label>
        <input class="form-control" type="text" name="picture" value="<?php echo $shows_item['picture']; ?>">
        </div>
        <div class="form-group">
            <label>Cijena:</label>
        <input class="form-control" type="text" name="price" value="<?php echo $shows_item['price']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Promijeni Predstavu">
        </form>
    </div>
    </div>
</div>