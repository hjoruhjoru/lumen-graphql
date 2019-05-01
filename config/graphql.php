<?php
return [
    'schema' => \App\Schema\Sakila\ActorSchema::class,
    'type_resolver' => \Digia\Lumen\GraphQL\Contracts\TypeResolverInterface::class,
    'processor' => \Youshido\GraphQL\Execution\Processor::class,
    'enable_graphiql' => true
];
?>
