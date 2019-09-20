<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:31
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BatchOfferModification;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferModificationCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offer-modification-commands/{$commandId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
