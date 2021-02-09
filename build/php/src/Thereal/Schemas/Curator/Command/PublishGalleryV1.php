<?php
// @link https://schemas.thereal.com/json-schema/thereal/curator/command/publish-gallery/1-0-0.json#
namespace Thereal\Schemas\Curator\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1 as GdbotsNcrPublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1Mixin as GdbotsNcrPublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class PublishGalleryV1 extends AbstractMessage implements
    PublishGallery,
    GdbotsPbjxCommandV1,
    GdbotsNcrPublishNodeV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:curator:command:publish-gallery:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrPublishNodeV1Mixin::create(),
            ]
        );
    }
}
