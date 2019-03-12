<?php
/*
Title: Extra fields
Taxonomy: guide
Capability: manage_options
Locked: true
New: true
Collapse: true
*/

// Let's create a text box field
piklist('field', array(
    'type' => 'file',
    'field' => 'guide_media_upload',
    'label' => __('Add Guide image','roots')
));

piklist('field', array(
    'type' => 'colorpicker',
    'field' => 'guide_colorpicker',
    'label' => __('Color','roots')
));
