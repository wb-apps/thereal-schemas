<?php
// @link https://schemas.thereal.com/json-schema/thereal/canvas/request/search-pages-request/1-0-0.json#
namespace Thereal\Schemas\Canvas\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesRequest\SearchNodesRequestV1 as GdbotsNcrSearchNodesRequestV1;
use Gdbots\Schemas\Ncr\Mixin\SearchNodesRequest\SearchNodesRequestV1Mixin as GdbotsNcrSearchNodesRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Canvas\Mixin\SearchPagesRequest\SearchPagesRequestV1 as TrinitiCanvasSearchPagesRequestV1;
use Triniti\Schemas\Canvas\Mixin\SearchPagesRequest\SearchPagesRequestV1Mixin as TrinitiCanvasSearchPagesRequestV1Mixin;

final class SearchPagesRequestV1 extends AbstractMessage implements
    SearchPagesRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrSearchNodesRequestV1,
    TrinitiCanvasSearchPagesRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:canvas:request:search-pages-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrSearchNodesRequestV1Mixin::create(),
                TrinitiCanvasSearchPagesRequestV1Mixin::create(),
            ]
        );
    }
}
