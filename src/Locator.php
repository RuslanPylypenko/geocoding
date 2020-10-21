<?php

namespace geocoding;

class Locator
{
    /**
     * @param string $address
     * @return Location|null
     */
    public function locate(string $address): ?Location
    {
        if (empty($address)){
            throw new \InvalidArgumentException('EmptyIp');
        }

        return null;
    }
}