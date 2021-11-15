<?php include('inc/header.php'); ?>

<body>
  <?php include('inc/navbar.php'); ?>
  <?php include('inc/modals/edit.php'); ?>

  <?php include('inc/admin-table.php'); ?>
  <?php include('inc/admin-table-template.php'); ?>


  <div id="edit-house-modal" class="modal fade" role="modal">
    <div class="modal-dialog">
      <div class="modal-content" id="edit-modal-content">

      </div>
    </div>
  </div>

  <div id="create-house-modal" class="modal fade" role="modal">
    <div class="modal-dialog">
      <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create house</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        <form>
          <label for="id">Street:</label>
          <input type="text" name="street" value="" require><br>
          <label for="place">Place:</label>
          <input type="text" name="place" value="" require><br>
          <label for="zipcode">Zipcode:</label>
          <input type="text" name="zipcode" value="" require><br>
          <label for="region">Region:</label>
          <input type="text" name="region" value="" require><br>
          <label for="housenumber">Housenumber:</label>
          <input type="number" name="housenumber" value="" require><br>
          <label for="rooms">Rooms:</label>
          <input type="text" name="rooms" value="" type="number" require><br>
          <label for="bedrooms">Bedrooms:</label>
          <input type="text" name="bedrooms" value="" type="number" require><br>
          <label for="building_date">Building date:</label>
          <input type="date" name="building_date" value=""><br>
          <label for="placement">Placement:</label>
          <input type="text" name="placement" value="" require><br>
          <label for="surface">Surface:</label>
          <input type="text" name="surface" value="" require><br>
          <label for="type">Type:</label>
          <input type="text" name="type" value="" require><br>
          <label for="date">Date:</label>
          <input type="date" name="date" value=""><br>
          <label for="sold">Sold:</label>
          <input type="text" name="sold" value=""><br>
          <label for="price">Price:</label>
          <input type="text" name="price" value="" require><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="create-house" data-bs-dismiss="modal" class="btn-edit btn btn-primary" type="submit">Create</button>
      </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('inc/scripts-admin.php'); ?>
</body>

<?php include('inc/footer.php'); ?>

</html>