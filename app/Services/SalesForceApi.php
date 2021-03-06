<?php

namespace App\Services;

use App\Models\Configuration;
use \Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response as HttpCode;

/**
 * https://www.gosquared.com/blog/salesforce-rest-api-integration
 *
 * User must click in the following link and allow permitions then he will be
 * redirected to our frontend with a code which will be submitted to backend
 * and a new token will be generated
 * https://login.salesforce.com/services/oauth2/authorize?response_type=code&client_id=3MVG9cHH2bfKACZbfAk7QiqjniaizHkKgMtE8HFvsCPgapFfka9Sp9Oxxaj6eiScpjJgbwddHvkidG98h09tA&redirect_uri=https://127.0.0.1/test.php
 *
 * generate token
 * https://login.salesforce.com/services/oauth2/token?grant_type=authorization_code&redirect_uri=https://127.0.0.1/test.php&client_id=3MVG9cHH2bfKACZbfAk7QiqjniaizHkKgMtE8HFvsCPgapFfka9Sp9Oxxaj6eiScpjJgbwddHvkidG98h09tA&client_secret=D2BF74D44B9EAEC58AB13F454FA60D50142880E8909BFE4DC46CA9E8D01FED06&code=
 *
 * refresh token
 * https://login.salesforce.com/services/oauth2/token?grant_type=refresh_token&client_id=3MVG9cHH2bfKACZbfAk7QiqjniaizHkKgMtE8HFvsCPgapFfka9Sp9Oxxaj6eiScpjJgbwddHvkidG98h09tA&client_secret=D2BF74D44B9EAEC58AB13F454FA60D50142880E8909BFE4DC46CA9E8D01FED06&refresh_token=YOUR_REFRESH_T
 */
class SalesForceApi
{
    private PendingRequest $client;
    private string $version = "v42.0"; // what is the most recent version ?

    public function __construct()
    {
        $this->client = Http::acceptJson();
    }

    /**
     * @return array
     */
    public function getAuthorizeUrl(): array
    {
        return [
            'url' => 'https://login.salesforce.com/services/oauth2/authorize?response_type=code&client_id=' . config('salesforce.salesforce_key') . '&redirect_uri=' . config('salesforce.callback_url')
        ];
    }

    /**
     * @param string $code
     *
     * @return array
     * @throws \Exception
     */
    public function getToken(string $code): array
    {
        $response = $this->client->get(
           'https://login.salesforce.com/services/oauth2/token',
            [
                'grant_type' => 'authorization_code',
                'redirect_uri' => config('salesforce.callback_url'),
                'client_id' => config('salesforce.salesforce_key'),
                'client_secret' => config('salesforce.salesforce_secret'),
                'code' => $code
            ]
        );
        $response = json_decode($response->body(), true);
        return [
            'access_token' => \Arr::get($response, 'access_token'),
            'refresh_token' => \Arr::get($response, 'refresh_token'),
            'instance_url' => \Arr::get($response, 'instance_url')
        ];
    }

    /**
     * @param string $refreshToken
     *
     * @return array
     * @throws \Exception
     */
    public function getRefreshToken(string $refreshToken)
    {
        $response = $this->client->get(
            config('salesforce.oauth_url') . 'token',
            [
                'grant_type' => 'authorization_code',
                'redirect_uri' => config('salesforce.callback_url'),
                'client_id' => config('salesforce.salesforce_key'),
                'client_secret' => config('salesforce.salesforce_secret'),
                'refresh_token' => $refreshToken
            ]
        );
        if (!$response->ok()) {
            throw new \Exception(config('exceptions.oauth_failed_in_salesforce_rest_api'), HttpCode::HTTP_BAD_GATEWAY);
        }
        $response = json_decode($response->body());
        return [
            'access_token' => \Arr::get($response, 'access_token'),
            'refresh_token' => \Arr::get($response, 'refresh_token')
        ];
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getAllAccounts()
    {
        $this->client->withToken(Configuration::first()->access_token);
        $response = $this->client->get(
            config('salesforce.salesforce_instance_url') . '/services/data/' . $this->version . '/sobjects/Contact'
        );
        if (!$response->ok()) {
            throw new \Exception(config('exceptions.oauth_failed_in_salesforce_rest_api'), HttpCode::HTTP_BAD_GATEWAY);
        }
       return json_decode($response->body(), true);
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getAccountById(string $id)
    {
        $this->client->withToken(Configuration::first()->access_token);
        $response = $this->client->get(
            config('salesforce.salesforce_instance_url') . '/services/data/' . $this->version . '/sobjects/Contact/' . $id
        );
        if (!$response->ok()) {
            throw new \Exception(config('exceptions.oauth_failed_in_salesforce_rest_api'), HttpCode::HTTP_BAD_GATEWAY);
        }
        return json_decode($response->body(), true);
    }

    /**
     * @param array $payload
     *
     * @return mixed
     * @throws \Exception
     */
    public function createAccount(array $payload)
    {
        $this->client->withToken(Configuration::first()->access_token);
        $response = $this->client->post(
            config('salesforce.salesforce_instance_url') . '/services/data/' . $this->version . '/sobjects/Account/',
            $payload
        );
        if (!$response->status() == 201) {
            throw new \Exception(config('exceptions.oauth_failed_in_salesforce_rest_api'), HttpCode::HTTP_BAD_GATEWAY);
        }
        return json_decode($response->body(), true);
    }

    /**
     * @param string $accountId
     * @param array  $payload
     *
     * @return bool
     * @throws \Exception
     */
    public function updateAccount(string $accountId, array $payload): bool
    {
        $this->client->withToken(Configuration::first()->access_token);
        $response = $this->client->patch(
            config('salesforce.salesforce_instance_url') . '/services/data/' . $this->version . '/sobjects/Account/' . $accountId,
            $payload
        );
        if (!$response->status() == 201) {
            throw new \Exception(config('exceptions.oauth_failed_in_salesforce_rest_api'), HttpCode::HTTP_BAD_GATEWAY);
        }
        return true;
    }

    /**
     * @param string $query
     *
     * @return array
     * @throws \Exception
     */
    public function executeQuery(string $query): array
    {
        $this->client->withToken(Configuration::first()->access_token);
        $response = $this->client->get(
            config('salesforce.salesforce_instance_url') . '/services/data/' . $this->version . '/query/?q=' . $query
        );
        if (!$response->status() == 201) {
            throw new \Exception(config('exceptions.oauth_failed_in_salesforce_rest_api'), HttpCode::HTTP_BAD_GATEWAY);
        }
        return json_decode($response->body(), true);
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function describeResource(string $resource)
    {
        $this->client->withToken(Configuration::first()->access_token);
        $response = $this->client->get(
            config('salesforce.salesforce_instance_url') . '/services/data/' . $this->version . '/sobjects/' . $resource . '/describe'
        );
        if (!$response->ok()) {
            throw new \Exception(config('exceptions.oauth_failed_in_salesforce_rest_api'), HttpCode::HTTP_BAD_GATEWAY);
        }
        return json_decode($response->body(), true);
    }
}
