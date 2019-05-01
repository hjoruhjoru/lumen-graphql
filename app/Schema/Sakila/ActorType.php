<?php
namespace App\Schema\Sakila;

use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\BooleanType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;

class ActorType extends AbstractObjectType
{
	public function build($config)
    {
		$config->addField('actor_id', new IntType())
			->addField('first_name', new StringType())
			->addField('last_name', new StringType());
	}
}
?>
