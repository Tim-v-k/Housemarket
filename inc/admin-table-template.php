<template id="table-houses-template">
    {{#.}}
        <tr>
            <td class="houses-id {{id}}"><span>{{id}}</span></td>
            <td class="houses-street"><span>{{street}}</span></td>
            <td class="houses-place"><span>{{place}}</span></td>
            <td class="houses-zipcode"><span>{{zipcode}}</span></td>
            <td class="houses-housenumber"><span>{{housenumber}}</span></td>
            <td class="houses-price"><span>{{price}}</span></td>
            <td>
                <button type="button" class="btn-edit btn btn-primary" id="{{id}}" data-bs-toggle="modal" data-bs-target="#edit-house-modal"> Edit</button>
            </td>
            <td><button class="button btn-danger btn-delete" id="{{id}}">Delete</button></td>
        </tr>
    {{/.}}
</template>