<?php
// @link https://schemas.thereal.com/json-schema/thereal/curator/request/render-widget-request/1-0-0.json#
namespace Thereal\Schemas\Curator\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Curator\Mixin\RenderWidgetRequest\RenderWidgetRequestV1 as TrinitiCuratorRenderWidgetRequestV1;
use Triniti\Schemas\Curator\Mixin\RenderWidgetRequest\RenderWidgetRequestV1Mixin as TrinitiCuratorRenderWidgetRequestV1Mixin;

final class RenderWidgetRequestV1 extends AbstractMessage implements
    RenderWidgetRequest,
    GdbotsPbjxRequestV1,
    TrinitiCuratorRenderWidgetRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:curator:request:render-widget-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                TrinitiCuratorRenderWidgetRequestV1Mixin::create(),
            ]
        );
    }
}
