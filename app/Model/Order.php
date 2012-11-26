<?php
App::uses('AppModel', 'Model');
/**
 * Order Model
 *
 * @property Freight $Freight
 */
class Order extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Freight' => array(
			'className' => 'Freight',
			'foreignKey' => 'freight_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
