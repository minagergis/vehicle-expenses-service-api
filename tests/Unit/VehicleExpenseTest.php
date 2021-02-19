<?php
namespace Tests\Feature;

use Tests\TestCase;

class VehicleExpenseTest extends TestCase
{


    /** @test */
    public function testIsClientCanGetVehicleExpensesList()
    {
        $response = $this->call('GET', '/api/v1/expenses-list', ['limit' => 10]);
        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function testIsClientCanFilterVehicleExpensesListByMinCost()
    {
        $this->json('GET', '/api/v1/expenses-list', ['min_cost' => 3, 'limit' => 20])
            ->assertJsonFragment([
                'cost' => 2,
            ]);


    }

    /** @test */
    public function testIsClientCanFilterVehicleExpensesListByMaxCost()
    {
        $this->json('GET', '/api/v1/expenses-list', ['max_cost' => 5, 'limit' => 20])
            ->assertJsonFragment([
                'cost' => 9,
            ]);


    }

    /** @test */
    public function testIsClientCanFilterVehicleExpensesListByMinCreationDate()
    {
        $this->json('GET', '/api/v1/expenses-list', ['min_creation_date' => '2002-01-28', 'limit' => 20])
            ->assertJsonFragment([
                'createdAt' => '1982-04-01 00:00:00',
            ]);


    }

    /** @test */
    public function testIsClientCanFilterVehicleExpensesListByMaxCreationDate()
    {
        $this->json('GET', '/api/v1/expenses-list', ['max_creation_date' => '2015-02-01', 'limit' => 20])
            ->assertJsonFragment([
                'createdAt' => '2017-07-01 00:00:00',
            ]);


    }

    /** @test */
    public function testIsClientCanFilterVehicleExpensesListByTypeCorrect()
    {
        $this->json('GET', '/api/v1/expenses-list', ['type' => ['insurance'], 'limit' => 20])
            ->assertJsonFragment([
                'type' => 'insurance',
            ]);

    }

    /** @test */
    public function testIsClientCanFilterVehicleExpensesListByTypeWrong()
    {
        $this->json('GET', '/api/v1/expenses-list', ['type' => ['insurance'], 'limit' => 20])
            ->assertJsonMissing([
                'type' => 'fuel'
            ]);

    }
}
