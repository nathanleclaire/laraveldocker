<?php namespace AdamWathan\Form\Elements;

class RadioButton extends Checkbox
{
	protected $attributes = array(
			'type' => 'radio',
		);

	public function __construct($name, $value = null)
	{
		parent::__construct($name);

		if (is_null($value)) {
			$value = $name;
		}
		
		$this->setValue($value);
	}
}