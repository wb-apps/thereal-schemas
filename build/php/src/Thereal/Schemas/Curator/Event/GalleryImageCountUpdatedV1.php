<?php
// @link https://schemas.thereal.com/json-schema/thereal/curator/event/gallery-image-count-updated/1-0-0.json#
namespace Thereal\Schemas\Curator\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Curator\Mixin\GalleryImageCountUpdated\GalleryImageCountUpdatedV1 as TrinitiCuratorGalleryImageCountUpdatedV1;
use Triniti\Schemas\Curator\Mixin\GalleryImageCountUpdated\GalleryImageCountUpdatedV1Mixin as TrinitiCuratorGalleryImageCountUpdatedV1Mixin;

final class GalleryImageCountUpdatedV1 extends AbstractMessage implements
    GalleryImageCountUpdated,
    GdbotsPbjxEventV1,
    TrinitiCuratorGalleryImageCountUpdatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:curator:event:gallery-image-count-updated:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                TrinitiCuratorGalleryImageCountUpdatedV1Mixin::create(),
            ]
        );
    }
}
