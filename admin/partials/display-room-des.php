<?php


//Display the Room Description meta box using a callback function
function dp_repm_rooms(object $post){

    $bed_room = intval(get_post_meta($post->ID, 'properties_bed_room', true));
    $bathroom = intval(get_post_meta($post->ID, 'properties_bath_room', true));
    $living_room= intval(get_post_meta($post->ID, 'properties_living_room', true));
    $dinning_room =intval(get_post_meta($post->ID, 'properties_dinning_room', true));
    $balcony = intval(get_post_meta($post->ID, 'properties_balcony', true));

    ?>

    <div>
        <label for="bed-room">
            Bed Room:
            <input type="number" id="bed-room" name="properties_bed_room" value="<?= $bed_room?>">
        </label>
    </div>
    <div>
        <label for="bathroom">
            Bathroom:
            <input type="number" id="bathroom" name="properties_bath_room" value="<?= $bathroom?>">
        </label>
    </div>
    <div>
        <label for="living-room">
            Living Room:
            <input type="number" id="living-room" name="properties_living_room" value="<?= $living_room?>">
        </label>
    </div>
    <div>
        <label for="dinning-room">
            Dinning Room:
            <input type="number" id="dinning-room" name="properties_dinning_room" value="<?= $dinning_room?>">
        </label>
    </div>
    <div>
        <label for="balcony">
            Balcony:
            <input type="number" id="balcony-room" name="properties_balcony" value="<?= $balcony?>">
        </label>
    </div>

    <?php

}
















