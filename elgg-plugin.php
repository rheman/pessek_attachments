<?php

return [
	'bootstrap' => \hypeJunction\Attachments\Bootstrap::class,
	'routes' => [
		'attachments:upload' => [
			'path' => '/attachments/upload/{guid}',
			'resource' => 'attachments/upload',
		],
		'attachments:view' => [
			'path' => '/attachments/view/{guid}',
			'resource' => 'attachments/view',
		],
	],
];
