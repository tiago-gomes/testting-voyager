<?php

namespace App\Console\Commands;

use App\Models\Configuration;
use App\Services\SalesForceApi;
use Illuminate\Console\Command;

class UpdateAccessToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'salesforce:refresh-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Salesforce Refresh Token';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     * @throws \Throwable
     */
    public function handle()
    {
        $configuration = Configuration::first();
        if (!$configuration) {
            throw new \Exception('Account as not been configured yet');
        }

        $salesForce = new SalesForceApi();
        $response = $salesForce->getRefreshToken($configuration->refresh_token);
        Configuration::first()->updateOrFail(
            [
                'access_token' => \Arr::get($response, 'access_token'),
                'refresh_token' => \Arr::get($response, 'refresh_token')
            ]
        );
        return 0;
    }
}
