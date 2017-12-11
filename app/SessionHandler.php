<?php

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
