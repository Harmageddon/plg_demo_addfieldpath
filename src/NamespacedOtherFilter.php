<?php

namespace Joomla\Plugin\System\DemoAddFieldPath;

use Joomla\CMS\Form\Form;
use Joomla\CMS\Form\FormFilterInterface;
use Joomla\Registry\Registry;

class NamespacedOtherFilter implements FormFilterInterface
{
	public function filter(\SimpleXMLElement $element, $value, $group = null, Registry $input = null, Form $form = null)
	{
		return strtolower($value);
	}
}
