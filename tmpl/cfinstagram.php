<?php defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$value = $field->value;
$width = $field->fieldparams->get('width', '100').$field->fieldparams->get('unitwidth', '%');
$height = $field->fieldparams->get('height', '710').$field->fieldparams->get('unitheight', 'px');
?>
<iframe src="//instagram.com/p/<?php echo $value; ?>/embed/" frameborder="0" scrolling="no" allowtransparency="true" style="width: <?php echo $width; ?>; height: <?php echo $height; ?>;"></iframe>