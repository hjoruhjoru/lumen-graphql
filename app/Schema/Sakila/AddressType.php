<?php
namespace App\Schema\Sakila;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\BooleanType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;

class AddressType extends AbstractObjectType
{
	public function build($config)
    {
		$config->addField('address_id', new IntType())
			->addField('address', new StringType())
			->addField('address2', new StringType())
			->addField('district', new StringType())
			->addField('city_id', new IntType())
			->addField('postal_code', new StringType())
			->addField('phone', new StringType());
	}
}
