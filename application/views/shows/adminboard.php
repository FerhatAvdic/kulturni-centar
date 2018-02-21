<div class="container">
    <h2>Predstave</h2> <a href="<?php echo site_url('shows/create');?>" class="btn btn-success">Napravi Predstavu</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Predstava</th>
        <th>Opis</th>
        <th>Slika</th>
        <th>Cijena</th>
        <th>Opcije</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($shows as $shows_item): ?>
        <tr>
            <td><?php echo $shows_item['id']; ?></td>
            <td><?php echo $shows_item['title']; ?></td>
            <td><?php echo $shows_item['description']; ?></td>
            <td><?php echo $shows_item['picture']; ?></td>
            <td><?php echo $shows_item['price']; ?></td>
            <td><a class="btn btn-primary" href="<?php echo site_url('shows/edit/'.$shows_item['id']); ?>">Promijeni</a>
            <a class="btn btn-danger" href="<?php echo site_url('shows/delete/'.$shows_item['id']); ?>" 
                   onClick="return confirm('Da li ste sigurni da želite da obrišete predstavu?')">Izbriši</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    
  </table>
    
      <h2>Rezervacije</h2>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Predstava</th>
        <th>Termin</th>
        <th>Koliko sjedišta</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Telefon</th>
        <th>Opcije</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($reservations as $reservation): ?>
        <tr>
            <td><?php echo $reservation['id']; ?></td>
            <td><?php echo $reservation['show']; ?></td>
            <td><?php echo $reservation['date']; ?></td>
            <td><?php echo $reservation['seats']; ?></td>
            <td><?php echo $reservation['name']; ?></td>
            <td><?php echo $reservation['surname']; ?></td>
            <td><?php echo $reservation['phone']; ?></td>
            <td><a class="btn btn-danger" href="<?php echo site_url('reservations/delete/'.$reservation['id']); ?>" 
                   onClick="return confirm('Da li ste sigurni da želite da obrišete predstavu?')">Izbriši</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    
  </table>
    
    <br>
    <h2>Slike Predstava</h2> 
    <a href="<?php echo site_url('shows/addpicture');?>" class="btn btn-success">Dodaj Sliku</a>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>ID Predstave</th>
        <th>Link slike</th>
          <th>Opcije</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($show_pictures as $picture): ?>
        <tr>
            <td><?php echo $picture['id']; ?></td>
            <td><?php echo $picture['showid']; ?></td>
            <td><?php echo $picture['link']; ?></td>
            <td><a class="btn btn-danger" href="<?php echo site_url('shows/deletepicture/'.$picture['id']); ?>" 
                   onClick="return confirm('Da li ste sigurni da želite da obrišete sliku?')">Izbriši</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
    
        <br>
    <h2>Poruke</h2> 
    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
          <th>Datum i Vrijeme</th>
        <th>Ime Prezime</th>
          <th>Telefon</th>
          <th>Email</th>
          <th>Poruka</th>
          <th>Opcije</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($messages as $message): ?>
        <tr>
            <td><?php echo $message['id']; ?></td>
            <td><?php echo $message['timestamp']; ?></td>
            <td><?php echo $message['name']; ?></td>
            <td><?php echo $message['phone']; ?></td>
            <td><?php echo $message['email']; ?></td>
            <td><?php echo $message['body']; ?></td>
            <td><a class="btn btn-danger" href="<?php echo site_url('contact/delete/'.$message['id']); ?>" 
                   onClick="return confirm('Da li ste sigurni da želite da obrišete poruku?')">Izbriši</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
    </div>