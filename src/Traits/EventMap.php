<?php

namespace UnsaDev\SamlIdp\Traits;

trait EventMap
{
    /**
     * All of the Laravel SAML IdP event / listener mappings.
     *
     * @var array
     */
    protected $default_events = [
        'UnsaDev\SamlIdp\Events\Assertion' => [],
        'Illuminate\Auth\Events\Logout' => [
            'UnsaDev\SamlIdp\Listeners\SamlLogout',
        ],
        'Illuminate\Auth\Events\Authenticated' => [
            'UnsaDev\SamlIdp\Listeners\SamlAuthenticated',
        ],
        'Illuminate\Auth\Events\Login' => [
            'UnsaDev\SamlIdp\Listeners\SamlLogin',
        ],
    ];
}
