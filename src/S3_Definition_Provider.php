<?php declare(strict_types=1);

namespace Tribe\Storage\Adapters;

use Aws\S3\S3Client;
use DI\Definition\Source\DefinitionArray;
use DI\Definition\Source\DefinitionSource;
use Tribe\Storage\Plugin\Definition_Provider;

/**
 * PHP-DI Definitions for AWS S3.
 *
 * @package Tribe\Storage\Adapters
 */
class S3_Definition_Provider implements Definition_Provider {

	/**
	 * @throws \Exception
	 */
	public function get_definitions(): DefinitionSource {
		return new DefinitionArray( [
			S3_Adapter::class => static function () {
				$bucket = (string) apply_filters(
					'tribe/storage/s3_bucket',
					defined( 'TRIBE_STORAGE_S3_BUCKET' ) ? TRIBE_STORAGE_S3_BUCKET : ''
				);

				$options = (array) apply_filters(
					'tribe/storage/s3_client_options',
					defined( 'TRIBE_STORAGE_S3_OPTIONS' ) ? TRIBE_STORAGE_S3_OPTIONS : []
				);

				return new S3_Adapter( $bucket, new S3Client( $options ) );
			},
		] );
	}

}
