<?php
// @link https://schemas.thereal.com/json-schema/thereal/curator/request/search-teasers-response/1-0-0.json#
namespace Thereal\Schemas\Curator\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesResponse\SearchNodesResponseV1 as GdbotsNcrSearchNodesResponseV1;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesResponse\SearchNodesResponseV1Mixin as GdbotsNcrSearchNodesResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Curator\Mixin\SearchTeasersResponse\SearchTeasersResponseV1 as TrinitiCuratorSearchTeasersResponseV1;
use Triniti\Schemas\Curator\Mixin\SearchTeasersResponse\SearchTeasersResponseV1Mixin as TrinitiCuratorSearchTeasersResponseV1Mixin;
use Triniti\Schemas\Curator\Mixin\WidgetSearchResponse\WidgetSearchResponseV1 as TrinitiCuratorWidgetSearchResponseV1;
use Triniti\Schemas\Curator\Mixin\WidgetSearchResponse\WidgetSearchResponseV1Mixin as TrinitiCuratorWidgetSearchResponseV1Mixin;

final class SearchTeasersResponseV1 extends AbstractMessage implements
    SearchTeasersResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrSearchNodesResponseV1,
    TrinitiCuratorWidgetSearchResponseV1,
    TrinitiCuratorSearchTeasersResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:curator:request:search-teasers-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrSearchNodesResponseV1Mixin::create(),
                TrinitiCuratorWidgetSearchResponseV1Mixin::create(),
                TrinitiCuratorSearchTeasersResponseV1Mixin::create(),
            ]
        );
    }
}
