<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

use function PHPUnit\Framework\isNull;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (Throwable $e) {

            if (isNull($e)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Verifique a requisição e tente novamente.'
                ], 500);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Verifique a requisição e tente novamente.',
                    'error' => $e
                ], 500);
            }
        });
    }
}
