<?php
use App\Translate;

$langs = Translate::all();
$langs = $langs->translate('en');

$output = array();
foreach($langs as $lang)
{
    $output[$lang->key] = $lang->text;
}

return $output;