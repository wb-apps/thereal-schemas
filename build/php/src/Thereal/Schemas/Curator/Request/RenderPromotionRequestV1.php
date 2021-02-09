<?php
// @link https://schemas.thereal.com/json-schema/thereal/curator/request/render-promotion-request/1-0-0.json#
namespace Thereal\Schemas\Curator\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Curator\Mixin\RenderPromotionRequest\RenderPromotionRequestV1 as TrinitiCuratorRenderPromotionRequestV1;
use Triniti\Schemas\Curator\Mixin\RenderPromotionRequest\RenderPromotionRequestV1Mixin as TrinitiCuratorRenderPromotionRequestV1Mixin;

final class RenderPromotionRequestV1 extends AbstractMessage implements
    RenderPromotionRequest,
    GdbotsPbjxRequestV1,
    TrinitiCuratorRenderPromotionRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:curator:request:render-promotion-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                TrinitiCuratorRenderPromotionRequestV1Mixin::create(),
            ]
        );
    }
}
