<?php

/**
 * https://www.gosquared.com/blog/salesforce-rest-api-integration
 *
 * User must click in the following link and allow permitions then he will get redirected to our frontend with a code which will be submitted to backend and a new token will be generated
 * https://login.salesforce.com/services/oauth2/authorize?response_type=code&client_id=3MVG9cHH2bfKACZbfAk7QiqjniaizHkKgMtE8HFvsCPgapFfka9Sp9Oxxaj6eiScpjJgbwddHvkidG98h09tA&redirect_uri=https://127.0.0.1/test.php
 *
 * generate token
 * https://login.salesforce.com/services/oauth2/token?grant_type=authorization_code&redirect_uri=https://127.0.0.1/test.php&client_id=3MVG9cHH2bfKACZbfAk7QiqjniaizHkKgMtE8HFvsCPgapFfka9Sp9Oxxaj6eiScpjJgbwddHvkidG98h09tA&client_secret=D2BF74D44B9EAEC58AB13F454FA60D50142880E8909BFE4DC46CA9E8D01FED06&code=aPrxD8aRZGb_abrlDUhs0J6IagR2f7IkGPeKtHysphhh064ooYzAdWocxB5jLWX5ja1pOXnqig%3D%3D
 *
 * refresh token
 * https://login.salesforce.com/services/oauth2/token?grant_type=refresh_token&client_id=3MVG9cHH2bfKACZbfAk7QiqjniaizHkKgMtE8HFvsCPgapFfka9Sp9Oxxaj6eiScpjJgbwddHvkidG98h09tA&client_secret=D2BF74D44B9EAEC58AB13F454FA60D50142880E8909BFE4DC46CA9E8D01FED06&refresh_token=YOUR_REFRESH_T
 */
class SalesForceRest
{

    protected string $url = "https://login.salesforce.com/services/oauth2/";
    protected string $redirectUrl = "https://127.0.0.1/test.php";

    public function getAuthorizeUrl()
    {
        return [
            'url' => 'https://login.salesforce.com/services/oauth2/authorize?response_type=code&client_id='.  env('SALESFORCE_KEY') . '&redirect_uri=' . $this->redirectUrl
        ];
    }

    /**
     * @param string $code
     *
     * @return array
     */
    public function getToken(string $code)
    {
        $client = Http::acceptJson();
        $response = $client->get(
            $this->url . 'token',
            [
                'grant_type' => 'authorization_code',
                'redirect_uri' => 'https://127.0.0.1/test.php',
                'client_id' => env('SALESFORCE_KEY'),
                'client_secret' => env('SALESFORCE_SECRET')
            ]
        );
        $response = json_decode($response->body());
        return [
            'access_token' => \Arr::get($response, 'access_token'),
            'refresh_token' => \Arr::get($response, 'refresh_token')
        ];
    }

    /**
     * @param string $refreshToken
     *
     * @return array
     */
    public function getRefreshToken(string $refreshToken)
    {
        $client = Http::acceptJson();
        $response = $client->get(
            $this->url . 'token',
            [
                'grant_type' => 'authorization_code',
                'redirect_uri' => 'https://127.0.0.1/test.php',
                'client_id' => env('SALESFORCE_KEY'),
                'client_secret' => env('SALESFORCE_SECRET'),
                'refresh_token' => $refreshToken
            ]
        );
        $response = json_decode($response->body());
        return [
            'access_token' => \Arr::get($response, 'access_token'),
            'refresh_token' => \Arr::get($response, 'refresh_token')
        ];
    }
}
