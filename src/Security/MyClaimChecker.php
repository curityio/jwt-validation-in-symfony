<?php

namespace App\Security;

use Jose\Component\Checker\ClaimChecker;
use Jose\Component\Checker\InvalidClaimException;

class MyClaimChecker implements ClaimChecker
{
    public function checkClaim($value): void
    {
        if ($value !== 'someConcreteValue') {
            throw new InvalidClaimException("This is a wrong value for a claim.", "myClaim", $value);
        }
    }

    public function supportedClaim(): string
    {
        return "myClaim";
    }

}
