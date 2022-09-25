<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use App\Actions\Auth\AuthenticatedUserAction;
use App\Actions\Auth\AuthenticatedUserRequest;
use App\Actions\Auth\GetCurrentUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthenticatedHttpRequest;
use App\Http\Resources\TokenResource;
use App\Http\Resources\UserResource;
use App\Http\Response\ApiResponse;


final class AuthController extends Controller
{
    private $authenticatedUserAction;

    private $getCurrentUserAction;


    public function __construct(
        AuthenticatedUserAction $authenticatedUserAction,
        GetCurrentUserAction $getCurrentUserAction
    ) {

        $this->authenticatedUserAction = $authenticatedUserAction;
        $this->getCurrentUserAction = $getCurrentUserAction;
    }

    public function login(AuthenticatedHttpRequest $request): ApiResponse
    {

        $response = $this->authenticatedUserAction->execute(
            AuthenticatedUserRequest::fromRequest($request)
        );

        return ApiResponse::success(new TokenResource($response));
    }

    public function getCurrentUser(): ApiResponse
    {
        $response = $this->getCurrentUserAction->execute();
        return ApiResponse::success(new UserResource($response->user()));
    }
}
