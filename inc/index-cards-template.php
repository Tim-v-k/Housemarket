<template id="all-houses-template">
        <div class="container-100">
                <div class="row">
                        {{#.}}
                                <div class="card w-25 m-5" id="{{id}}">
                                        <h5 class="card-header">{{street}} {{housenumber}}</h5>
                                        <div class="card-body">
                                                {{place}} {{zipcode}}</br>
                                                €{{price}} k.k.
                                                <button class="btn-edit btn objects-info-btn btn-primary" id="{{id}}" data-bs-toggle="modal" data-bs-target="#more-info-modal">More info</button>
                                        </div>
                                </div>
                        {{/.}}
                </div>
        </div>
</template>