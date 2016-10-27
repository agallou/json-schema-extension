<?php

namespace mageekguy\atoum\jsonSchema;

use mageekguy\atoum;

$vendorDirectory = __DIR__ . '/../vendor';

if (is_dir($vendorDirectory) === false)
{
	$vendorDirectory = __DIR__ . '/../../..';
}

if (is_file($vendorAutoloader = $vendorDirectory . '/hoa/core/Core.php')) {
	require_once $vendorDirectory . '/hoa/core/Core.php';

    atoum\autoloader::get()->addDirectory('Hoa\Core', $vendorDirectory . '/hoa/core');
}

if (is_dir($vendorDirectory . '/hoa/consistency'))
{
    atoum\autoloader::get()->addDirectory('Hoa\Consistency', $vendorDirectory . '/hoa/consistency');
}

if (is_dir($vendorDirectory . '/hoa/string'))
{
    atoum\autoloader::get()->addDirectory('Hoa\String', $vendorDirectory . '/hoa/string');
}
else
{
    atoum\autoloader::get()->addDirectory('Hoa\Ustring', $vendorDirectory . '/hoa/ustring');
}

atoum\autoloader::get()
	->addDirectory('Hoa\Compiler', $vendorDirectory . '/hoa/compiler')
	->addDirectory('Hoa\Console', $vendorDirectory . '/hoa/console')
	->addDirectory('Hoa\Dispatcher', $vendorDirectory . '/hoa/dispatcher')
	->addDirectory('Hoa\File', $vendorDirectory . '/hoa/file')
	->addDirectory('Hoa\Iterator', $vendorDirectory . '/hoa/iterator')
	->addDirectory('Hoa\Math', $vendorDirectory . '/hoa/math')
	->addDirectory('Hoa\Praspel', $vendorDirectory . '/hoa/praspel')
	->addDirectory('Hoa\Realdom', $vendorDirectory . '/hoa/realdom')
	->addDirectory('Hoa\Regex', $vendorDirectory . '/hoa/regex')
	->addDirectory('Hoa\Router', $vendorDirectory . '/hoa/router')
	->addDirectory('Hoa\Stream', $vendorDirectory . '/hoa/stream')
	->addDirectory('Hoa\Visitor', $vendorDirectory . '/hoa/visitor')
	->addDirectory('Atoum\PraspelExtension', $vendorDirectory . '/atoum/praspel-extension')
;
