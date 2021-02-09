<?php
// @link https://schemas.thereal.com/json-schema/thereal/boost/request/search-sponsors-response/1-0-0.json#
namespace Thereal\Schemas\Boost\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesResponse\SearchNodesResponseV1 as GdbotsNcrSearchNodesResponseV1;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesResponse\SearchNodesResponseV1Mixin as GdbotsNcrSearchNodesResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Boost\Mixin\SearchSponsorsResponse\SearchSponsorsResponseV1 as TrinitiBoostSearchSponsorsResponseV1;
use Triniti\Schemas\Boost\Mixin\SearchSponsorsResponse\SearchSponsorsResponseV1Mixin as TrinitiBoostSearchSponsorsResponseV1Mixin;

final class SearchSponsorsResponseV1 extends AbstractMessage implements
    SearchSponsorsResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrSearchNodesResponseV1,
    TrinitiBoostSearchSponsorsResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:boost:request:search-sponsors-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrSearchNodesResponseV1Mixin::create(),
                TrinitiBoostSearchSponsorsResponseV1Mixin::create(),
            ]
        );
    }
}
