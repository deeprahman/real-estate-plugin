<?php


//Register a function that will be called when the administration interface is visited.
add_action('admin_init', 'dr_repm_admin_init');
//Implement the ''dr_repm_admin_init' and register the meta box
function dr_repm_admin_init()
{
    //Register the Property Location meta box
    add_meta_box(
        'dr_repm_location_meta_box',
        'Property Location',
        'dr_repm_display_location_meta_box',
        'properties',
        'normal',
        'high'
    );
//    Register the Owner's Information meta box'
    add_meta_box(
        'dr_repm_owner_info',
        'Property Owner\'s Information',
        'dp_repm_owner_info',
        'properties',
        'normal',
        'high'
    );
//    Register the Rooms Description meta box
    add_meta_box(
        'dr_repm_rooms',
        'Rooms',
        'dp_repm_rooms',
        'properties',
        'normal',
        'high'
    );
}