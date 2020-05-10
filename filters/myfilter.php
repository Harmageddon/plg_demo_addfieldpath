<?php

use Joomla\CMS\Form\FormFilterInterface;

class JFormFilterMyFilter implements FormFilterInterface
{
	public function filter(\SimpleXMLElement $element, $value, $group = null, \Joomla\Registry\Registry $input = null, \Joomla\CMS\Form\Form $form = null)
	{
		return strtoupper($value);
	}
}
