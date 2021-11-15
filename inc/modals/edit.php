<template id="template-house-modal">
    {{#.}}
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit house {{id}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form>
                <label for="id">ID:</label>
                <input type="number" name="id" value="{{id}}" readonly require><br>
                <label for="id">Street:</label>
                <input type="text" name="street" value="{{street}}" require><br>
                <label for="id">Place:</label>
                <input type="text" name="place" value="{{place}}" require><br>
                <label for="id">Zipcode:</label>
                <input type="text" name="zipcode" value="{{zipcode}}" require><br>
                <label for="id">Region:</label>
                <input type="text" name="region" value="{{region}}" require><br>
                <label for="id">Housenumber:</label>
                <input type="number" name="housenumber" value="{{housenumber}}" require><br>
                <label for="id">Rooms:</label>
                <input type="text" name="rooms" value="{{rooms}}" require><br>
                <label for="id">Bedrooms:</label>
                <input type="text" name="bedrooms" value="{{bedrooms}}" require><br>
                <label for="id">Building date:</label>
                <input type="date" name="building_date" value="{{building_date}}" require><br>
                <label for="id">Placement:</label>
                <input type="text" name="placement" value="{{placement}}" require><br>
                <label for="id">Surface:</label>
                <input type="text" name="surface" value="{{surface}}" require><br>
                <label for="id">Type:</label>
                <input type="text" name="type" value="{{type}}" require><br>
                <label for="id">Date:</label>
                <input type="date" name="date" value="{{date}}" require><br>
                <label for="id">Sold:</label>
                <input type="text" name="sold" value="{{sold}}"><br>
                <label for="id">Price:</label>
                <input type="text" name="price" value="{{price}}" require><br>
                <label for="id">Created at:</label>
                <input type="text" name="created_at" value="{{created_at}}" require readonly><br>
                <label for="id">Updated_at at:</label>
                <input type="text" name="updated_at" value="{{updated_at}}" require readonly><br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button id="submit-changes" data-bs-dismiss="modal" type="submit">Edit</button>
            </form>
        </div>
    {{/.}}
</template>