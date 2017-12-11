<?php

/**
 * App\SessionHandler
 *
 * Bridge for using native Laravel Sessions with our Shopify library
 */

namespace App;

use Shopify\Storage\PersistentStorageInterface;

class SessionHandler implements PersistentStorageInterface
{
    public function get($key)
    {
        return session($key);
    }

    public function set($key, $value)
    {
        return session($key, $value);
    }
}
