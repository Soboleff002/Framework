<?php
use \Core\Route;

return [
	new Route('/my-page1/', 'page', 'show1'),
	new Route('/my-page2/', 'page', 'show2'),
	new Route('/test/:var1/:var2/', 'page', 'act'),
	new Route('/act1/', 'test', 'act1'),
	new Route('/act2/', 'test', 'act2'),
	new Route('/act3/', 'test', 'act3'),
	new Route('/nums/:n1/:n2/:n3/', 'sum', 'sum'),
	
];
	

