<?php
/*
* title: Source fields
* Post type: source
**/

$source_title = array(
  'type'         => 'text',
  'field'        => 'source_title',
  'label'        => __('Title', 'roots'),
  'columns'      => 12
);

$source_author = array(
  'type'         => 'text',
  'field'        => 'source_author',
  'label'        => __('Author','roots'),
  'columns'      => 12
);

$source_publication_location = array(
  'type'         => 'text',
  'field'        => 'source_publication_location',
  'label'        => __('Location','roots'),
  'columns'      => 4
);

$source_publisher = array(
  'type'         => 'text',
  'field'        => 'source_publisher',
  'label'        => __('Publisher','roots'),
  'columns'      => 4
);

$source_publication_year = array(
  'type'         => 'text',
  'field'        => 'source_publication_year',
  'label'        => __('Year', 'roots'),
  'columns'      => 4
);

$source_chapter_title = array(
  'type'         => 'text',
  'field'        => 'source_chapter_title',
  'label'        => __('Chapter Title', 'roots'),
  'columns'      => 12
);

$source_pages = array(
  'type'         => 'text',
  'field'        => 'source_pages_title',
  'label'        => __('Pages', 'roots'),
  'columns'      => 4
);

$source_volume = array(
  'type'         => 'text',
  'field'        => 'source_volume_title',
  'label'        => __('Volume', 'roots'),
  'columns'      => 4
);

$source_number = array(
  'type'         => 'text',
  'field'        => 'source_number_title',
  'label'        => __('Number', 'roots'),
  'columns'      => 4
);

$source_website = array(
  'type'         => 'text',
  'field'        => 'source_online_source_url',
  'label'        => __('Source URL', 'roots'),
  'columns'      => 12
);

$source_isbn = array(
  'type'         => 'text',
  'field'        => 'source_isbn_source_title',
  'label'        => __('ISBN', 'roots'),
  'columns'      => 4
);

$source_website_date = array(
  'type'         => 'datepicker',
  'field'        => 'source_online_source_visitation',
  'label'        => __('Visited on', 'roots'),
  'columns'      => 4
);

/* ------------------------------------------------------------ website group */

piklist('field', array(
  'type'      => 'select',
  'field'     => 'source_type_select',
  'label'     => 'Source Type',
  'choices'   => array(
    'BK'  => __('Book','roots'),
    'CH'  => __('Chapter','roots'),
    'AR'  => __('Article','roots'),
    'NA'  => __('News article', 'roots'),
    'ON'  => __('Online source', 'roots'),
    'NN'  => __('None','roots')
  ),
  'value'     => 'NN',
)
);


piklist('field', array(
  'type'         => 'group',
  'field'        => 'source_book_group',
  'label'        => __('Book','roots'),
  'description'  => __('Indicates the book source for an innovation tool.','roots'),
  'fields'       => array(
    $source_author,
    $source_title,
    $source_publication_location,
    $source_publisher,
    $source_publication_year,
    $source_website,
    $source_isbn
  ),
  'conditions' => array(
    array(
      'field' =>'source_type_select',
      'value' => 'BK'
    )
  )
));

piklist('field', array(
  'type'         => 'group',
  'field'        => 'source_chapter_group',
  'label'        => __('Chapter','roots'),
  'description'  => __('Indicates the chapter source for an innovation tool.','roots'),
  'fields'       => array(
    $source_author,
    $source_title,
    $source_chapter_title,
    $source_publication_location,
    $source_publisher,
    $source_publication_year,
    $source_pages,
    $source_website,
  ),
  'conditions' => array(
    array(
      'field' =>'source_type_select',
      'value' => 'CH'
    )
  )
));

piklist('field', array(
  'type'         => 'group',
  'field'        => 'source_article_group',
  'label'        => __('Article','roots'),
  'description'  => __('Indicates the scientific article source for an innovation tool.','roots'),
  'fields'       => array(
    $source_author,
    $source_title,
    $source_publisher,
    $source_volume,
    $source_number,
    $source_publication_year,
    $source_pages,
    $source_website
  ),
  'conditions' => array(
    array(
      'field' =>'source_type_select',
      'value' => 'AR'
    )
  )
));

piklist('field', array(
  'type'         => 'group',
  'field'        => 'source_news_article_group',
  'label'        => __('News Article','roots'),
  'description'  => __('Indicates the news article source for an innovation tool.','roots'),
  'fields'       => array(
    $source_author,
    $source_title,
    $source_publisher,
    $source_number,
    $source_publication_year,
    $source_pages,
    $source_website
  ),
  'conditions' => array(
    array(
      'field' =>'source_type_select',
      'value' => 'NA'
    )
  )
));

piklist('field', array(
  'type'         => 'group',
  'field'        => 'source_online_source_group',
  'label'        => __('Online source','roots'),
  'description'  => __('Indicates the online source (website) for an innovation tool.','roots'),
  'fields'       => array(
    $source_author,
    $source_title,
    $source_website,
    $source_publisher,
    $source_publication_year,
    $source_website_date,
  ),
  'conditions' => array(
    array(
      'field' =>'source_type_select',
      'value' => 'ON'
    )
  )
));

piklist('field', array(
  'type'      => 'text',
  'field'     => 'source_amazon_affiliate_link',
  'label'     => 'Amazon link',
  'help'      => 'Affiliate program link',
  'columns'  => 12,
));
