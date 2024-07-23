<?php

namespace App\Application\Providers;

use Application\Dto\Identifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RoutingServiceProvider extends ServiceProvider
{
    public function boot(Request $request): void
    {

        Route::pattern('id', '[0-9]+');
        $this
            ->app
            ->bind(
                Identifier::class,
                fn(): Identifier => new Identifier($request->route($this->getIdParameters($request)))
            );
    }

    private function getIdParameters(Request $request): ?string {

        $parameters = $request->route()?->parameters();

        if(! is_array($parameters)) {
            return null;
        }

        foreach ($parameters as $key => $value) {
            if (str_ends_with($key, '_id') || $key === 'id') {
                return $key;
            }
        }

        return null;
    }
}
