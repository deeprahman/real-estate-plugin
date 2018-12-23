<?php


//Display the Owner's Information Meta Box using a callback function
function dp_repm_owner_info(object $post){
    $full_name = esc_html(get_post_meta($post->ID, 'properties_full_name',true));
    $address = esc_html(get_post_meta($post->ID, 'properties_address', true));
    $contact_no = esc_html(get_post_meta($post->ID,'properties_contact_no', true));
    $email = esc_html(get_post_meta($post->ID, 'properties_owner_email', true));

    ?>
    <table>
        <tr>
            <td>Full Name:</td>
            <td><input type="text" name="properties_full_name" value="<?= $full_name?>"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="properties_address" value="<?= $address?>"></td>
        </tr>
        <tr>
            <td>Contact No.:</td>
            <td><input type="text" name="properties_contact_no" value="<?= $contact_no?>"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="properties_owner_email" value="<?= $email?>"></td>
        </tr>

    </table>
    <?php

}

































