<?php

abstract class Registry 
{
    private static array $objects = [];
    
    final public static function set(string $key, object $object)
    {
        self::$objects[$key] = $object;
    }
    
    final public static function get(string $key)
    {
        if (! isset(self::$objects[$key])) {
            throw new \Exception('Invalid key!');
        }
        
        return self::$objects[$key];
    }
    
    final public static function exists(string $key): bool
    {
        return array_key_exists($key, self::$objects);
    }
}
