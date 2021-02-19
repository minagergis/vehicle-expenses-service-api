<?php

namespace App\Http\Controllers;

use App\Repositories\ExpenseRepositoryInterface;
use App\Services\Filter;

class VehicleExpenseController extends Controller
{

    private $expenseRepository;

    public function __construct(ExpenseRepositoryInterface $expenseRepository)
    {
        $this->expenseRepository = $expenseRepository;

    }

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Afaqy task Documentation",
     *      description="This service is providing endpoints to filter data of the vehicle expenses from multi linked tables in the database through database view",
     *     @OA\Contact(
     *          email="minaatifabduallah@gmail.com"
     *      )
     *
     * )
     */
    /**
     * @OA\Server(url="http://127.0.0.1:8000")
     */
    /**
     * @OA\Tag(name="Vehicle: Expenses", description="vehicle list."),
     **/
    /**
     * @OA\Get(
     *  path="/api/v1/expenses-list",
     *  tags={"Vehicle: Expenses"},
     *  summary="Get list of the vechile expenses.",
     *  description="This endpoint to list all the vehicle expenses concerning the filter criteria",
     *  operationId="VechileExpensesList",
     *  @OA\Parameter(
     *      name="name", @OA\Schema(type="string"), in="query", description="Apply filtering by Vechile name.", required=false
     *  ),
     *  @OA\Parameter(
     *      name="type", @OA\Schema(type="array",@OA\Items(type="string")), description="Apply filtering by expense type.", in="query", required=false
     *  ),
     *  @OA\Parameter(
     *      name="max_cost", @OA\Schema(type="integer"), in="query", description="Apply filtering by maximum expense cost.", required=false
     *  ),
     *  @OA\Parameter(
     *      name="min_cost", @OA\Schema(type="integer"), in="query", description="Apply filtering by minimum expense cost.", required=false
     *  ),
     *  @OA\Parameter(
     *      name="max_creation_date", @OA\Schema(type="datetime"), in="query", description="Apply filtering by maximum expence creation date .", required=false
     *  ),
     *  @OA\Parameter(
     *      name="min_creation_date", @OA\Schema(type="datetime"), in="query", description="Apply filtering by minimum expense creation date.", required=false
     *  ),
     *  @OA\Parameter(
     *      name="cost_sort", @OA\Schema(type="string", enum={"ASC", "DESC"}), in="query", description="Apply sort filter to expenses cost."
     *  ),
     *  @OA\Parameter(
     *      name="creation_date_sort", @OA\Schema(type="string", enum={"ASC", "DESC"}), in="query", description="Apply sort filter to expenses creation date."
     *  ),
     *  @OA\Parameter(
     *      name="limit",@OA\Schema(type="integer"), in="query", description="Apply limit to the returned expenses data."
     *  ),
     *  @OA\Response(response=200, description="successful operation", @OA\JsonContent(
     *       example={
     *          {
     *              "id": "1",
     *              "vehicleName": "Prof. Garland Lang",
     *              "plateNumber":"3290804",
     *              "cost":"3",
     *              "createdAt": "2019-11-20 11:53:05",
     *              "type": "fuel",
     *          },
     *          {
     *              "id": "1",
     *              "vehicleName": "Prof. Garland Lang",
     *              "plateNumber":"3290804",
     *              "cost":"2",
     *              "createdAt": "1985-12-09 00:00:00",
     *              "type": "insurance",
     *          },
     *      }),
     *  ),
     *  @OA\Response(response=429, description="Too many requests"),
     *  @OA\Response(response=500, description="Internal Server Error")
     * )
     *
     */


    /**
     * get expenses list endpoint
     * @param Filter $filters
     * @return mixed
     */
    public function getList(Filter $filters)
    {
        return $this->expenseRepository->getItems($filters);

    }


}
