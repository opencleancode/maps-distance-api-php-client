<?php

declare(strict_types=1);

namespace GoogleMaps\MatrixApi\RequestResponse;

class Status
{
    /**
     * indicates the response contains a valid result.
     */
    public const OK = 'OK';

    /**
     * indicates that the provided request was invalid.
     */
    public const INVALID_REQUEST = 'INVALID_REQUEST';

    /**
     * indicates that the product of origins and destinations exceeds the per-query limit.
     */
    public const MAX_ELEMENTS_EXCEEDED = 'MAX_ELEMENTS_EXCEEDED';

    /**
     * indicates that the number of origins or destinations exceeds the per-query limit.
     */
    public const MAX_DIMENSIONS_EXCEEDED = 'MAX_DIMENSIONS_EXCEEDED';

    /**
     * indicates any of the following:
     * The API key is missing or invalid.
     * Billing has not been enabled on your account.
     * A self-imposed usage cap has been exceeded.
     * The provided method of payment is no longer valid (for example, a credit card has expired).
     */
    public const OVER_DAILY_LIMIT = 'OVER_DAILY_LIMIT';

    /**
     * indicates the service has received too many requests from your application within the allowed time period.
     */
    public const OVER_QUERY_LIMIT = 'OVER_QUERY_LIMIT';

    /**
     * indicates that the service denied use of the Distance Matrix service by your application.
     */
    public const REQUEST_DENIED = 'REQUEST_DENIED';

    /**
     * indicates a Distance Matrix request could not be processed due to a server error.
     * The request may succeed if you try again.
     */
    public const UNKNOWN_ERROR = 'UNKNOWN_ERROR';
}
