<?php
// @link https://schemas.thereal.com/json-schema/thereal/news/request/search-articles-response/1-0-0.json#
namespace Thereal\Schemas\News\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesResponse\SearchNodesResponseV1 as GdbotsNcrSearchNodesResponseV1;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesResponse\SearchNodesResponseV1Mixin as GdbotsNcrSearchNodesResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Curator\Mixin\WidgetSearchResponse\WidgetSearchResponseV1 as TrinitiCuratorWidgetSearchResponseV1;
use Triniti\Schemas\Curator\Mixin\WidgetSearchResponse\WidgetSearchResponseV1Mixin as TrinitiCuratorWidgetSearchResponseV1Mixin;
use Triniti\Schemas\News\Mixin\SearchArticlesResponse\SearchArticlesResponseV1 as TrinitiNewsSearchArticlesResponseV1;
use Triniti\Schemas\News\Mixin\SearchArticlesResponse\SearchArticlesResponseV1Mixin as TrinitiNewsSearchArticlesResponseV1Mixin;

final class SearchArticlesResponseV1 extends AbstractMessage implements
    SearchArticlesResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrSearchNodesResponseV1,
    TrinitiCuratorWidgetSearchResponseV1,
    TrinitiNewsSearchArticlesResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:news:request:search-articles-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrSearchNodesResponseV1Mixin::create(),
                TrinitiCuratorWidgetSearchResponseV1Mixin::create(),
                TrinitiNewsSearchArticlesResponseV1Mixin::create(),
            ]
        );
    }
}
