
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Kontakt
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Početna</a>
                    </li>
                    <li class="active">Kontakt</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2876.937931183185!2d18.419831915691915!3d43.857115147238346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c8dc4195f389%3A0xb4e16ea307424e7!2sBosanski+kulturni+centar!5e0!3m2!1sen!2sba!4v1495890678323">
                </iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Kontakt Informacije</h3>
                <p>
                    3481 Melrose Place<br>Beverly Hills, CA 90210<br>
                </p>
                <p>
                    <i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (123) 456-7890
                </p>
                <p>
                    <i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p>
                    <i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Pošalji nam poruku</h3>
                <?php echo validation_errors(); ?>
                <?php echo form_open('contact'); ?>  
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Ime:</label>
                            <input type="text" class="form-control" id="name" name="name" alt=""required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Kontakt Tel.:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Adresa:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Poruka:</label>
                            <textarea rows="10" cols="100" class="form-control" id="body" name="body"required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <input type="submit" name="submit" class="btn btn-primary" value="Pošalji"/>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    </div>
    <!-- /.container -->
   