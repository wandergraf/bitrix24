<?
require_once (__DIR__.'/crest.php');

$result = CRest::call(
		'crm.contact.update',
		['ID' => '42', ]
	);

echo '<pre>';
	print_r($result);
echo '</pre>';