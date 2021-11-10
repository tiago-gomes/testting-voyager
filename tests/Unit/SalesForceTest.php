<?php

namespace Tests\Unit;

use App\Services\SalesForceApi;
use Tests\TestCase;

class SalesForceTest extends TestCase
{
    /**
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
        $account = $client->getAccountById('0035e00000G6ml6AAB');
        $this->assertIsArray($account);
    }

    /**
     * reference: https://developer.salesforce.com/docs/atlas.en-us.sfFieldRef.meta/sfFieldRef/salesforce_field_reference_Account.htm
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @throws \Exception
     */
    public function testUpsertAccount()
    {
        $client = new SalesForceApi();
        $account = $client->createAccount([
            "Name" => "Account from REST API"
        ]);
        $this->assertIsArray($account);
        $isAccountUpdated = $client->updateAccount(
            \Arr::get($account, 'id'),
            [
                "Name" => "Account from REST API 2"
            ]
        );
        $this->assertTrue($isAccountUpdated);
    }

    public function testExecuteQuery()
    {
        $client = new SalesForceApi();
        $account = $client->executeQuery('SELECT+name+from+Account');
        $this->assertIsArray($account);
    }

    public function testDescribeResource()
    {
        $client = new SalesForceApi();
        $account = $client->describeResource('Account');
        $this->assertIsArray($account);
    }
}
