<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 3/21/18
 * Time: 10:36 AM
 */
require_once 'HeaderConnected.php' ?>

<div class="container col-md-6 offset-md-3" style="padding-top: 5%" xmlns="http://www.w3.org/1999/html">
    <div class="card-outline-secondary">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Event</h3>
            </div>
            <div class="card-body">
                <form action="" class="form" role="form" autocomplete="off" id="loginForm" novalidate="" method="POST">
                    <div class="form-group">
                        <input name="address" id="autocomplete" placeholder="Enter your address" type="text"></input>
                    </div>
                    <div class="form-group">
                        Start at
                        <input type="date" name="bday" max="3000-12-31"
                               min="1000-01-01" class="form-control">
                    </div>
                        End at
                    <div class="form-group">
                        <input type="date" name="bday" max="3000-12-31"
                               min="1000-01-01" class="form-control">
                    </div>
                    <textarea name="content" id="editor">
                        <p>This is some sample content. </p>
                    </textarea>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Check things</button>
                </form>
            </div>

        </div>
    </div>
</div>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
        console.log( editor );
    } )
        .catch( error => {
        console.error( error );
    } );
</script>


<?php
// AUTO is -- form is -
// -- name
// -- createdAt
// - dateStart dateEnd
// -- adress -lat lng
// validate = false
// --postedBy
//--image = Null
?>

<script>
    var placeSearch, autocomplete;

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

</script>

<?php require_once 'Endbody.php' ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChgkCStI_CzqTWxuteujDUeEBF90it_h8&libraries=places&callback=initAutocomplete"
        async defer></script>