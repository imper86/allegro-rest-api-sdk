<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:23
 */

namespace Imper86\AllegroRestApiSdk\Service;




use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Lcobucci\JWT\Token;

/**
 * Interface AuthServiceInterface
 * @package Imper86\AllegroRestApiSdk\Service
 */
interface AuthServiceInterface
{
    const OAUTH_URI = 'https://allegro.pl/auth/oauth';
    const OAUTH_SANDBOX_URI = 'https://allegro.pl.allegrosandbox.pl/auth/oauth';

    /**
     * @return string
     */
    public function getAuthUrl(): string;

    /**
     * @param string $authCode
     * @return TokenBundleInterface
     */
    public function generateTokenBundle(string $authCode): TokenBundleInterface;

    /**
     * @param string|Token $refreshToken
     * @return TokenBundleInterface
     */
    public function refreshToken($refreshToken): TokenBundleInterface;
}
