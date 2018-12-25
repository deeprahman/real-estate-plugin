<?php


//Display the Location Meta Box using a callback function
function dr_repm_display_location_meta_box(object $post): void
{

    $holding_no = esc_html(get_post_meta($post->ID, 'holding_or_street', true));
    $thana_upozilla = esc_html(get_post_meta($post->ID, 'thana_upozilla', true));

    $district = esc_html(get_post_meta($post->ID, 'district', true));
    $state = esc_html(get_post_meta($post->ID, 'state', true));

    $country = esc_html(get_post_meta($post->ID, 'country', true));
    $post_code = intval(get_post_meta($post->ID, 'post_code', true));
    ?>
    <table>
        <tr>
            <td id="address">
                <div id="property-location" >

                    <table class="location-table">

                        <tr>
                            <td>Street Name:</td>
                            <td>
                                <input type="text" size="30" id="road" name="properties_street_holding" value="<?= $holding_no ?>">

                            </td>
                        </tr>
                        <tr>
                            <td>Thana/Upozilla/Neighbourhood:</td>
                            <td>
                                <input type="text" id="village" size="30" name="properties_thana_upozilla" value="<?= $thana_upozilla ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>District:</td>
                            <td>
                                <input type="text" id="city" size="30" name="properties_district" value="<?= $district ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>State/Division:</td>
                            <td>
                                <input type="text" id="state" size="30" name="properties_state" value="<?= $state ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td>
                                <input type="text" id="country" size="30" name="properties_country" value="<?= $country ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Post Code:</td>
                            <td>
                                <input type="text" id="post-code" size="30" name="properties_post_code" value="<?= $post_code ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p id="submit" style="border:1px solid darkslategrey; background-color: oldlace; width:7em; text-align:center;cursor:pointer">Show Location</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td id="Map">
                <div id="mapid" style="height: 300px; width: 800px;"></div>
            </td>
        </tr>
    </table>


    <?php
}
