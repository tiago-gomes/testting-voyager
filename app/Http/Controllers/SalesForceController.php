<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Services\SalesForceApi;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Http\JsonResponse;


class SalesForceController extends Controller
{
    private SalesForceApi $salesForceApi;

    /**
     * @param SalesForceApi $salesForceApi
     */
    public function __construct(SalesForceApi $salesForceApi)
    {
        $this->salesForceApi = $salesForceApi;
    }

    /**
     * @param Request $request
     *
     * @return Redirector|RedirectResponse|Application
     */
    public function authorizeUrl(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $url = \Arr::get($this->salesForceApi->getAuthorizeUrl(), 'url');
        return redirect($url);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function callback(Request $request): JsonResponse
    {
        $code = $request->get('code');
        $data = $this->salesForceApi->getToken($code);

        $accessToken = \Arr::get($data, 'access_token');
        $refreshToken = \Arr::get($data, 'refresh_token');

        $configuration = Configuration::create([
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken
        ]);

        return response()->json($configuration, 200);
    }
}
