<?php
namespace App\Schema\Sakila;

use Youshido\GraphQL\Config\Schema\SchemaConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Schema\AbstractSchema;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;
use App\Models\Actor;
use App\Models\Address;
use App\Schema\Sakila\ActorType;
use App\Schema\Sakila\AddressType;

class ActorSchema extends AbstractSchema
{
	public function build(SchemaConfig $config)
    {
		$config->getQuery()->addFields([
			'actor' => [
				'type'    => new ActorType(),
				'args' => [
						'first_name' => new StringType()
				],
				'resolve' => function ($value, array $args, ResolveInfo $info) {
					return Actor::where('first_name', $args['first_name'])->first(['actor_id', 'first_name', 'last_name'])->toArray();
				}
			],
			'address' => [
                'type'    => new AddressType(),
                'args' => [
                        'postal_code' => new StringType()
                ],
                'resolve' => function ($value, array $args, ResolveInfo $info) {
					var_dump(Address::where('postal_code', $args['postal_code'])->first(['address', 'district', 'postal_code'])->toArray());
                    return Address::where('postal_code', $args['postal_code'])->first(['address', 'district', 'postal_code'])->toArray();
                }
            ],
		]);
	}
}
?>
