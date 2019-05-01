<?php

namespace App\Http\Controllers;

use Digia\JsonHelpers\JsonEncoder;
use Digia\Lumen\GraphQL\GraphQLService;
use Digia\Lumen\GraphQL\Models\GraphQLError;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Lumen\Routing\Controller;
use Symfony\Component\HttpFoundation\JsonResponse as SymfonyJsonResponse;
use Youshido\GraphQL\Execution\Processor;
use Youshido\GraphQL\Schema\Schema;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\ObjectType;
use Youshido\GraphQL\Type\Scalar\IntType;
use App\Models\Actor;

class GraphQLController extends Controller
{

	public const ATTRIBUTE_ERROR = __CLASS__ . '_error';
    
	/**
     * @var GraphQLService
     */
    private $graphqlService;
    
	/**
     * GraphQLController constructor.
     *
     * @param GraphQLService $graphqlService
     */
    public function __construct(GraphQLService $graphqlService)
    {
        $this->graphqlService = $graphqlService;
    }
	
	public function renderGraphiQL()
    {
        return view('graphiql');
    }

	/**
     * @param Request $request
     *
     * @return SymfonyJsonResponse
     */
    public function handle(Request $request)
    {
		//var_dump(Actor::where('first_name', 'PENELOPE')->first(['actor_id', 'first_name', 'last_name'])->toArray());
        $processor = $this->graphqlService->getProcessor();
        $query     = $request->get('query');
        $variables = $request->get('variables') ?? [];
        $responseData = $processor->processPayload($query, $variables)->getResponseData();
		if (isset($responseData['exceptions'])) {
            $request->attributes->set($this->getErrorAttribute(), new GraphQLError(
                $query, $variables, $responseData['exceptions']
            ));
        }
        $json = $this->responseDataToJson($responseData);
        return new SymfonyJsonResponse($json, 200, [], true);
    }

	/**
     * @param array $responseData
     *
     * @return string
     */
    protected function responseDataToJson(array $responseData)
    {
        return JsonEncoder::encode(array_except($responseData, ['exceptions']));
    }
}
?>
