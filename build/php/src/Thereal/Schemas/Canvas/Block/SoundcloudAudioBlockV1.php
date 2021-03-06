<?php
declare(strict_types=1);

// @link https://schemas.thereal.com/json-schema/thereal/canvas/block/soundcloud-audio-block/1-0-0.json#
namespace Thereal\Schemas\Canvas\Block;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Mixin as TrinitiCanvasBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\SoundcloudAudioBlock\SoundcloudAudioBlockV1Mixin as TrinitiCanvasSoundcloudAudioBlockV1Mixin;

final class SoundcloudAudioBlockV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:thereal:canvas:block:soundcloud-audio-block:1-0-0';
    const SCHEMA_CURIE = 'thereal:canvas:block:soundcloud-audio-block';
    const SCHEMA_CURIE_MAJOR = 'thereal:canvas:block:soundcloud-audio-block:v1';
    const MIXINS = [
      'triniti:canvas:mixin:block:v1',
      'triniti:canvas:mixin:block',
      'triniti:canvas:mixin:soundcloud-audio-block:v1',
      'triniti:canvas:mixin:soundcloud-audio-block',
    ];

    use TrinitiCanvasBlockV1Mixin;

    use TrinitiCanvasSoundcloudAudioBlockV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                Fb::create('etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                /*
                 * In rendering environments that support HTML the css_class
                 * can be appended to the dom elements' class attribute.
                 */
                Fb::create('css_class', T\StringType::create())
                    ->pattern('^[\w\s-]+$')
                    ->build(),
                /*
                 * Represents an update that occurred on the node this block
                 * is attached to. DOES NOT indicate an update to the block itself.
                 * eg an article with a twitter block with updated_date means that
                 * the article was updated to include that twitter block.
                 */
                Fb::create('updated_date', T\DateTimeType::create())
                    ->build(),
                /*
                 * When true it means this block represents a portion of a document
                 * whose content is only indirectly related to the document's main content.
                 * Asides are frequently presented as sidebars or call-out boxes.
                 */
                Fb::create('aside', T\BooleanType::create())
                    ->build(),
                Fb::create('track_id', T\StringType::create())
                    ->required()
                    ->pattern('^\d+$')
                    ->build(),
                Fb::create('auto_play', T\BooleanType::create())
                    ->build(),
                Fb::create('show_comments', T\BooleanType::create())
                    ->build(),
                Fb::create('hide_related', T\BooleanType::create())
                    ->build(),
                /*
                 * Whether or not to use the thumbnail as a poster image.
                 */
                Fb::create('visual', T\BooleanType::create())
                    ->build(),
                /*
                 * A reference to an image asset to use as the poster that will
                 * override what is provided by soundcloud.
                 */
                Fb::create('poster_image_ref', T\NodeRefType::create())
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
