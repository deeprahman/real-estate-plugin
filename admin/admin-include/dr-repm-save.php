<?php


//Register a function that will be called when posts are seved
add_action('save_post', 'dr_repm_add_property_location_field', 10, 2);
//Implementation of the dr_repm_add_property_location_field
function dr_repm_add_property_location_field(int $property_id, object $property){
//    check the post-type for property
    if ($property->post_type === 'properties'){
//        Store data in post meta table if present if in post data


//        Property Location Block
        {
            if (isset($_POST['properties_holding_or_street_num']) ){
                update_post_meta($property_id, 'holding_or_street_num', $_POST['properties_holding_or_street_num']);
            }

            if (isset($_POST['properties_street_holding']) ){
                update_post_meta($property_id, 'holding_or_street', $_POST['properties_street_holding']);
            }

            if (isset($_POST['properties_thana_upozilla']) ){
                update_post_meta($property_id, 'thana_upozilla', $_POST['properties_thana_upozilla']);
            }



            if (isset($_POST['properties_district']) ){
                update_post_meta($property_id, 'district', $_POST['properties_district']);
            }

            if (isset($_POST['properties_state']) ){
                update_post_meta($property_id, 'state', $_POST['properties_state']);
            }



            if (isset($_POST['properties_post_code']) ){
                update_post_meta($property_id, 'post_code', $_POST['properties_post_code']);
            }

            if (isset($_POST['properties_country']) ){
                update_post_meta($property_id, 'country', $_POST['properties_country']);
            }


        }

//        Owner Address Block
        {
            if (isset($_POST['properties_full_name']) && $_POST['properties_full_name'] != ''){
                update_post_meta($property_id, 'properties_full_name', $_POST['properties_full_name']);
            }

            if (isset($_POST['properties_address']) && $_POST['properties_address'] != ''){
                update_post_meta($property_id, 'properties_address', $_POST['properties_address']);
            }

            if (isset($_POST['properties_contact_no']) && $_POST['properties_contact_no'] != ''){
                update_post_meta($property_id, 'properties_contact_no', $_POST['properties_contact_no']);
            }
            if (isset($_POST['properties_contact_no']) && $_POST['properties_contact_no'] != ''){
                update_post_meta($property_id, 'properties_contact_no', $_POST['properties_contact_no']);
            }
            if (isset($_POST['properties_owner_email']) && $_POST['properties_owner_email'] != ''){
                update_post_meta($property_id, 'properties_owner_email', $_POST['properties_owner_email']);
            }

        }//End of owner address block

        // Room Description Block
        {
            if (isset($_POST['properties_bed_room']) && $_POST['properties_bed_room'] != ''){
                update_post_meta($property_id, 'properties_bed_room', $_POST['properties_bed_room']);
            }
            if (isset($_POST['properties_bath_room']) && $_POST['properties_bath_room'] != ''){
                update_post_meta($property_id, 'properties_bath_room', $_POST['properties_bath_room']);
            }
            if (isset($_POST['properties_living_room']) && $_POST['properties_living_room'] != ''){
                update_post_meta($property_id, 'properties_living_room', $_POST['properties_living_room']);
            }
            if (isset($_POST['properties_dinning_room']) && $_POST['properties_dinning_room'] != ''){
                update_post_meta($property_id, 'properties_dinning_room', $_POST['properties_dinning_room']);
            }
            if (isset($_POST['properties_balcony']) && $_POST['properties_balcony'] != ''){
                update_post_meta($property_id, 'properties_balcony', $_POST['properties_balcony']);
            }



        }//end of room description

    }


}

