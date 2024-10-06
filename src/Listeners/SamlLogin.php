<?php

namespace UnsaDev\SamlIdp\Listeners;

use Illuminate\Auth\Events\Login;
use UnsaDev\SamlIdp\Jobs\SamlSso;

class SamlLogin
{
    /**
     * Listen for the Authenticated event
     *
     * @param  Authenticated $event [description]
     * @return [type]               [description]
     */
    public function handle(Login $event)
    {
        if (
            in_array($event->guard, config('samlidp.guards')) &&
            request()->filled('SAMLRequest') &&
            !request()->is('saml/logout')
        ) {
            abort(response(SamlSso::dispatchSync($event->guard), 302));
        }
    }
}
