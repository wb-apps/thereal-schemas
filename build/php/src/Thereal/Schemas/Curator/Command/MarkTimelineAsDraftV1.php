<?php
// @link https://schemas.thereal.com/json-schema/thereal/curator/command/mark-timeline-as-draft/1-0-0.json#
namespace Thereal\Schemas\Curator\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1 as GdbotsNcrMarkNodeAsDraftV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1Mixin as GdbotsNcrMarkNodeAsDraftV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class MarkTimelineAsDraftV1 extends AbstractMessage implements
    MarkTimelineAsDraft,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsDraftV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:curator:command:mark-timeline-as-draft:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsDraftV1Mixin::create(),
            ]
        );
    }
}
