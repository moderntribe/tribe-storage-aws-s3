<?php

/**
 * Bootstrap tests
 */

namespace Tribe\Storage\Adapters\Tests;

use Tribe\Storage\Core;
use DI\ContainerBuilder;

define( 'VENDOR_DIR', __DIR__ . '/../vendor' );

/**
 * Shorthand to get the instance of our main core plugin class
 *
 * @return mixed
 *
 * @throws \Exception
 */
function tribe_storage(): Core {
	$builder = new ContainerBuilder();
	$builder->addDefinitions( VENDOR_DIR . '/moderntribe/tribe-storage/config.php' );
	$container = $builder->build();

	return Core::instance( $container );
}
