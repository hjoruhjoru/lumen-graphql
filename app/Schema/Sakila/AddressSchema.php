<?php
namespace App\Schema\Sakila;
use Youshido\GraphQL\Config\Schema\SchemaConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Schema\AbstractSchema;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;
use App\Models\Address;
use App\Schema\Sakila\AddressType;

class AddressSchema extends AbstractSchema
{
	public function build(SchemaConfig $config)
    {
		
	}
}
?>
