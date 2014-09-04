<?php namespace AdamWathan\BootForms\Elements;

use AdamWathan\Form\Elements\Element;
use AdamWathan\Form\Elements\Label;

class CheckGroup extends FormGroup
{
	protected $label;

	public function __construct(Label $label)
	{
		$this->label = $label;
	}

	public function render()
	{		
		$html  = '<div';
		$html .= $this->renderAttributes();
		$html .= '>';
		$html .=  $this->label;
		$html .= $this->renderHelpBlock();

		$html .= '</div>';

		return $html;
	}

	public function control()
	{
		return $this->label->getControl();
	}

	public function __call($method, $parameters)
	{
		call_user_func_array(array($this->label->getControl(), $method), $parameters);
		return $this;
	}
}