<?php
// @link https://schemas.thereal.com/json-schema/thereal/ovp/event/video-renamed/1-0-0.json#
namespace Thereal\Schemas\Ovp\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1 as GdbotsNcrNodeRenamedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1Mixin as GdbotsNcrNodeRenamedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;

final class VideoRenamedV1 extends AbstractMessage implements
    VideoRenamed,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeRenamedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:ovp:event:video-renamed:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeRenamedV1Mixin::create(),
            ]
        );
    }
}
