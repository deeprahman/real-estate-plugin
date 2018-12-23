<?php


//Display the Location Meta Box using a callback function
function dr_repm_display_location_meta_box(object $post): void
{
    $holding = esc_html(get_post_meta($post->ID, 'holding_or_street_num',true));
    $holding_no = esc_html(get_post_meta($post->ID, 'holding_or_street', true));
    $thana_upozilla = esc_html(get_post_meta($post->ID, 'thana_upozilla', true));

    $district = esc_html(get_post_meta($post->ID, 'district', true));
    $country = esc_html(get_post_meta($post->ID, 'country', true));
    $post_code = intval(get_post_meta($post->ID, 'post_code', true));
    ?>
    <table>
        <tr>
            <td id="address">
                <div id="property-location" >

                    <table class="location-table">
                        <tr>
                            <td>Street/Holding No.:</td>
                            <td>
                                <input type="text" size="80" name="properties_holding_or_street_num" value="<?= $holding ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Street/Holding Name:</td>
                            <td>
                                <input type="text" size="80" name="properties_street_holding" value="<?= $holding_no ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Thana/Upozilla:</td>
                            <td>
                                <input type="text" size="80" name="properties_thana_upozilla" value="<?= $thana_upozilla ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>District:</td>
                            <td>
                                <input type="text" size="80" name="properties_district" value="<?= $district ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Post Code:</td>
                            <td>
                                <input type="text" size="80" name="properties_post_code" value="<?= $post_code ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td>
                                <input type="text" size="80" name="properties_country" value="<?= $country ?>">
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td id="Map">
                <div id="google-map" style="height: 300px; width: 350px;"></div>
            </td>
        </tr>
    </table>


    <?php
}
