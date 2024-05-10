<?php

namespace App\Exceptions;

use Exception;
use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;


class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        // If the exception is an instance of MethodNotAllowedHttpException
        // and it's caused by a GET request, redirect to the home page
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException && $request->isMethod('GET')) {
            return redirect('/');
        }

        // Handle other exceptions as usual
        return parent::render($request, $exception);
    }
}
