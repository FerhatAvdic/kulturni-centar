
    <!-- Page Heading/Breadcrumbs -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Rezervacije
                    <small>Rezervišite sjedišta za određenu predstavu</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Rezervacije</li>
                </ol>
            </div>
        </div>

        <!--Seats Section-->
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="seats-top">1</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="seats-left">2</div>
                </div>
                <div class="col-md-6">
                    <div class="seats-middle">3</div>
                </div>
                <div class="col-md-3">
                    <div class="seats-right">4</div>
                </div>
            </div>

        <div class="section-wrap">
            <div class="row">
                <?php echo validation_errors(); ?>
                <?php echo form_open('reservations/create'); ?>    
                <div class="col-lg-12 text-center">
                    <h1 class="section-header">
                        Rezervacija
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sel1">Predstava:</label>
                        <select class="form-control" id="sel1" name="show">
                            <?php foreach ($shows as $shows_item): ?>
                             <option <?php if($showbyID!==NULL)if($shows_item['id']===$showbyID['id']) echo "selected=selected"?> >
                             <?php echo $shows_item['title'].' '.$shows_item['id'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ime">Ime:</label>
                        <input type="text" class="form-control" id="ime" name="name">
                    </div>
                    <div class="form-group">
                        <label for="prezime">Prezime:</label>
                        <input type="text" class="form-control" id="prezime" name="surname">
                    </div>
                    <div class="form-group">
                        <label for="telefon">Kontakt Tel:</label>
                        <input type="text" class="form-control" id="telefon" name="phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sel1">Termin:</label>
                        <select class="form-control" id="sel1" name="date">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Broj Sjedišta:</label>
                        <select class="form-control" id="sel1" name="seats">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="text-right"><input type="submit" name="submit" class="btn btn-primary" value="Rezerviši"/></div>
                </div>
                </form>
            </div>
        </div>
    </div>
