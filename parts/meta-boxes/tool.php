<?php
/*
* title: Tool fields
* Post type: tool
**/


/* --------------------------------------------------------- Background image */

piklist('field', array(
  'type'         => 'file',
  'field'        => 'tool_background_image',
  'label'        => __('Add Background image 1920x1080 min','roots')
));


/* ----------------------------------------------------------- Tips & tricks  */

piklist('field', array(
  'type'         => 'editor',
  'field'        => 'tool_tips_and_tricks',
  'label'        => __('Tips & Tricks','roots')
));

/* ----------------------------------------------------------- Duration group */

$tool_duration_type_array = array(
  'type'      => 'select',
  'field'     => 'tool_duration_type',
  'label'     => __('Duration Unit','roots'),
  'columns'   => 5,
  'choices'   => array(
    'Minutes'         => __('Minutes','roots'),
    'Hour(s)'           => __('Hour(s)','roots'),
    'Day(s)'            => __('Day(s)','roots'),
    'Week(s)'           => __('Week(s)','roots'),
    'Month(s)'          => __('Month(s)', 'roots'),
    'Approximately'   => __('Approximately','roots')
  )
);

$tool_duration_value_array = array(
  'type'         => 'text',
  'field'        => 'tool_duration_value',
  'label'        => __('Duration value','roots'),
  'columns'      => 7
);

piklist('field', array(
  'type'         => 'group',
  'field'        => 'tool_duration_group',
  'label'        => __('Duration','roots'),
  'description'  => 'It indicates aproximatively how long does it take to accomplish this given task.',
  'fields'       => array($tool_duration_type_array, $tool_duration_value_array)
)
);


/* -------------------------------------------------------- Number of people  */

piklist('field', array(
  'type'         => 'text',
  'field'        => 'tool_participants',
  'label'        => __('Number of participants','roots')
));


/* ------------------------------------------------------------- Quotes group */

$tool_quote_array = array(
  'type'         => 'text',
  'field'        => 'tool_quote',
  'label'        => __('Quote','roots'),
  'columns'      => 12
);
$tool_quote_author_array = array(
  'type'         => 'text',
  'field'        => 'tool_quote_author',
  'label'        => __('Author','roots'),
  'columns'      => 6
);

piklist('field', array(
  'type'         => 'group',
  'field'        => 'tool_quote_group',
  'label'        => __('Quotes','roots'),
  'add_more'     => true,
  'description'  => 'Inspiring quotes to be remembered when using this tool',
  'fields'       => array($tool_quote_array, $tool_quote_author_array)
)
);



/* ----------------------------------------------------------- Versions group */

$tool_version_number_array = array(
  'type'         => 'text',
  'field'        => 'tool_version_number',
  'columns'      => 3,
  'label'        => __('Version n°','roots')
);

$tool_version_date_array = array(
  'type'         => 'datepicker',
  'field'        => 'tool_version_date',
  'columns'      => 6,
  'label'        => __('Date','roots'),
  'options'      => array(
    'dateFormat'   => 'dd/mm/yy'
  )
);

$tool_version_lang_array = array(
  'type'         => 'select',
  'field'        => 'tool_version_lang',
  'columns'      => 3,
  'label'        => __('Language','roots'),
  'choices'      => array(
    'en' => 'en',
    'es' => 'es',
    'fr' => 'fr',
  ),
);


$tool_version_file_array = array(
  'type'         => 'file',
  'field'        => 'tool_version_file',
  'label'        => __('Add File(s)','piklist'),
);

piklist('field', array(
  'type'         => 'group',
  'field'        => 'tool_version_group',
  'label'        => 'Versions',
  'add_more'     => true,
  'description'  => __('Keeps track of all versions proposed','roots'),
  'fields'       => array($tool_version_number_array, $tool_version_date_array, $tool_version_lang_array, $tool_version_file_array)
)
);


/* ----------------------------------------------------------------- Examples */

piklist('field', array(
  'type'         => 'file',
  'field'        => 'tool_example',
  'label'        => __('Add Example File(s)','roots')
));

/* ----------------------------------------------------------------- Examples */

piklist('field', array(
  'type'          => 'text',
  'field'         => 'tool_video',
  'label'         => __('Videos','roots'),
  'columns'       => 12,
  'add_more'      => true
));

/* --------------------------------------------------------------- Brain side */

// piklist('field', array(
//   'type'         => 'select',
//   'field'        => 'tool_brain_side',
//   'label'        => __('Brain side','roots'),
//   'choices'      => array(
//     'C' => __('Conceptual','roots'),
//     'A' => __('Analytical','roots'),
//     'S' => __('Structural','roots'),
//     'E' => __('Emotional','roots')
//   )
// ));


/* ----------------------------------------------------- Sources relationship */

// piklist('field', array(
//   'type'      => 'post-relate',
//   'scope'     => 'phase',
//   'template'  => 'field',
// )
// );

/* ----------------------------------------------------- Sources relationship */

// piklist('field', array(
//   'type'      => 'post-relate',
//   'scope'     => 'source',
//   'template'  => 'field',
// ));

$args = array(
   'numberposts'  => -1,
   'post_type'    => 'source'
);

piklist('field', array(
  'type'    => 'select',
  'title'   => 'Chapters',
  'label'   => __('Source(s)','roots'),
  'choices' => piklist( get_posts($args), array('ID', 'post_title')),
  'relate'  => array(
    'scope' => 'post'
  ),
  'attributes' => array('multiple' => 'multiple')
));
