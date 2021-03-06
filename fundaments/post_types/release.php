<?php class ReleasePostType extends SktPostType {
	protected $fields = array(
		'buy_url' => array('class' => 'widefat', 'label' => 'URL for online purchase'),
		'bandcamp_id' => array('class' => 'widefat', 'label' => 'Bandcamp ID'),
		'tracklist' => array(
			'type' => 'fieldset',
			'fields' => array(
				'title' => array(
					'class' => 'widefat'
				),
				'subtitle' => array(
					'class' => 'widefat'
				),
				'listen_url' => array(
					'class' => 'widefat',
					'label' => 'Preview URL'
				)
			)
		)
	);
}