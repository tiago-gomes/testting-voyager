<?php

namespace Tests\Unit;

use App\Services\SalesForceApi;
use Tests\TestCase;

class SalesForceTest extends TestCase
{
    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @throws \Exception
     */
    public function testGetAllAccounts()
    {
        $client = new SalesForceApi();
        $accounts = $client->getAllAccounts();
        $this->assertIsArray($accounts);
    }

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @throws \Exception
     */
    public function testGetAccountById()
    {
        $client = new SalesForceApi();
        $accounts = $client->getAccountById('0035e00000G6ml6AAB');
        $this->assertIsArray($accounts);
    }

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @throws \Exception
     */
    public function testCreateAccount()
    {
        $client = new SalesForceApi();
        $accounts = $client->createAccount([
            "Name" => "Account from REST API",
            "ShippingCity" => "Chennai"
        ]);
        $this->assertIsArray($accounts);
    }
}
