<?php declare(strict_types=1);

namespace Tribe\Storage\Adapters;

use Tribe\Storage\Plugin\Plugin_Loader;

// Load this plugin's container definitions
Plugin_Loader::get_instance()->add_definitions( new S3_Definition_Provider() );
