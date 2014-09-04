<?php

use AdamWathan\Form\Elements\Checkbox;

class CheckboxTest extends PHPUnit_Framework_TestCase
{
	public function testCheckboxCanBeCreated()
	{
		$checkbox = new Checkbox('terms');
	}

	public function testRenderBasicCheckbox()
	{
		$checkbox = new Checkbox('terms');
		$expected = '<input type="checkbox" name="terms" value="1">';
		$result = $checkbox->render();

		$this->assertEquals($expected, $result);

		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="1">';
		$result = $checkbox->render();

		$this->assertEquals($expected, $result);
	}

	public function testRenderBasicCheckboxWithValue()
	{
		$checkbox = new Checkbox('terms');
		$expected = '<input type="checkbox" name="terms" value="agree">';
		$result = $checkbox->value('agree')->render();

		$this->assertEquals($expected, $result);

		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="true">';
		$result = $checkbox->value('true')->render();

		$this->assertEquals($expected, $result);
	}

	public function testCanCheckCheckbox()
	{
		$checkbox = new Checkbox('terms');
		$expected = '<input type="checkbox" name="terms" value="1" checked="checked">';
		$result = $checkbox->check()->render();

		$this->assertEquals($expected, $result);
	}

	public function testCanUncheckCheckbox()
	{
		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="1">';
		$result = $checkbox->check()->uncheck()->render();

		$this->assertEquals($expected, $result);
	}

	public function testDefaultToChecked()
	{
		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="1" checked="checked">';
		$result = $checkbox->defaultToChecked()->render();

		$this->assertEquals($expected, $result);

		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="1">';
		$result = $checkbox->defaultToChecked()->uncheck()->render();

		$this->assertEquals($expected, $result);

		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="1">';
		$result = $checkbox->uncheck()->defaultToChecked()->render();

		$this->assertEquals($expected, $result);
	}

	public function testDefaultToUnchecked()
	{
		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="1">';
		$result = $checkbox->defaultToUnchecked()->render();

		$this->assertEquals($expected, $result);

		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="1" checked="checked">';
		$result = $checkbox->defaultToUnchecked()->check()->render();

		$this->assertEquals($expected, $result);

		$checkbox = new Checkbox('above_18');
		$expected = '<input type="checkbox" name="above_18" value="1" checked="checked">';
		$result = $checkbox->check()->defaultToUnchecked()->render();

		$this->assertEquals($expected, $result);
	}
}