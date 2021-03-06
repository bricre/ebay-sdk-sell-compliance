<?php

namespace Ebay\Sell\Compliance\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is the base response type of the getListingViolations method.
 */
class PagedComplianceViolationCollection extends AbstractModel
{
    /**
     * This integer value shows the offset of the current page of results. The offset
     * value controls the first listing violation in the result set that will be
     * displayed at the top of the response. The offset and limit query parameters are
     * used to control the pagination of the output. For example, if offset is set to
     * 10 and limit is set to 10, the call retrieves listing violations 11 thru 20 from
     * the resulting collection of violations. Note: This feature employs a zero-based
     * index, where the first item in the list has an offset of 0. Default: 0 {zero).
     *
     * @var int
     */
    public $offset = null;

    /**
     * The URI of the getListingViolations call request that produced the current page
     * of the result set.
     *
     * @var string
     */
    public $href = null;

    /**
     * The total number of listing violations in the result set. If this value is
     * higher than the limit value, there are multiple pages in the result set to view.
     *
     * @var int
     */
    public $total = null;

    /**
     * The getListingViolations call URI to use to view the next page of the result
     * set. For example, the following URI returns listing violations 21 thru 30 from
     * the collection of policy violations:
     * path/listing_violation?limit=10&amp;offset=20 This field is only returned if an
     * additional page of listing violations exists.
     *
     * @var string
     */
    public $next = null;

    /**
     * The getListingViolations call URI to use to view the previous page of the result
     * set. For example, the following URI returns listing violations 1 thru 10 from
     * the collection of policy violations:
     * path/listing_violation?limit=10&amp;offset=0 This field is only returned if an
     * previous page of listing violations exists.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The maximum number of listing violations returned per page of the result set.
     * The limit and offset query parameters are used to control the pagination of the
     * output. Note: If this is the last or only page in the result set, it may contain
     * fewer listing violations than the limit value. To determine the number of pages
     * in the result set, divide this value into the value of total and round up to the
     * next integer. Default: 50 Max: 200.
     *
     * @var int
     */
    public $limit = null;

    /**
     * An array of listing violations that match the criteria in the call request,
     * including pagination control {if set). As long as there is at least one listing
     * violation that matches the input criteria, this container will be returned. If
     * no listing violations are found for the seller, an HTTP status code of 204 No
     * Content is returned, and there is no response body.
     *
     * @var \Ebay\Sell\Compliance\Model\ComplianceViolation[]
     */
    public $listingViolations = null;
}
