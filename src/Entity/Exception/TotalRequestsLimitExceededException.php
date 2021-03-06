<?php

namespace Webit\WFirmaSDK\Entity\Exception;

use Webit\WFirmaSDK\Entity\Request;
use Webit\WFirmaSDK\Entity\Response;

class TotalRequestsLimitExceededException extends ApiException
{
    /**
     * @inheritdoc
     */
    protected static function message(Request $request, Response $response = null)
    {
        return 'Given API has been queried too many times.';
    }
}