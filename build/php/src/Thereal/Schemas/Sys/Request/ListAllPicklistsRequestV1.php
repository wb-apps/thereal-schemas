<?php
// @link https://schemas.thereal.com/json-schema/thereal/sys/request/list-all-picklists-request/1-0-0.json#
namespace Thereal\Schemas\Sys\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Sys\Mixin\ListAllPicklistsRequest\ListAllPicklistsRequestV1 as TrinitiSysListAllPicklistsRequestV1;
use Triniti\Schemas\Sys\Mixin\ListAllPicklistsRequest\ListAllPicklistsRequestV1Mixin as TrinitiSysListAllPicklistsRequestV1Mixin;

final class ListAllPicklistsRequestV1 extends AbstractMessage implements
    ListAllPicklistsRequest,
    GdbotsPbjxRequestV1,
    TrinitiSysListAllPicklistsRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:sys:request:list-all-picklists-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                TrinitiSysListAllPicklistsRequestV1Mixin::create(),
            ]
        );
    }
}
