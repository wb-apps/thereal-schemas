<?php
declare(strict_types=1);

// @link https://schemas.thereal.com/json-schema/thereal/canvas/block/audio-block/1-0-0.json#
namespace Thereal\Schemas\Canvas\Block;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Canvas\Mixin\AudioBlock\AudioBlockV1Mixin as TrinitiCanvasAudioBlockV1Mixin;
use Triniti\Schemas\Canvas\Mixin\Block\BlockV1Mixin as TrinitiCanvasBlockV1Mixin;

final class AudioBlockV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:thereal:canvas:block:audio-block:1-0-0';
    const SCHEMA_CURIE = 'thereal:canvas:block:audio-block';
    const SCHEMA_CURIE_MAJOR = 'thereal:canvas:block:audio-block:v1';
    const MIXINS = [
      'triniti:canvas:mixin:block:v1',
      'triniti:canvas:mixin:block',
      'triniti:canvas:mixin:node-ref-block:v1',
      'triniti:canvas:mixin:node-ref-block',
      'triniti:canvas:mixin:audio-block:v1',
      'triniti:canvas:mixin:audio-block',
    ];

    use TrinitiCanvasBlockV1Mixin;

    use TrinitiCanvasAudioBlockV1Mixin;

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
                Fb::create('node_ref', T\NodeRefType::create())
                    ->required()
                    ->build(),
                /*
                 * An optional override for the title of the node.
                 */
                Fb::create('title', T\StringType::create())
                    ->build(),
                Fb::create('launch_text', T\StringType::create())
                    ->build(),
                /*
                 * An optional reference to an image asset to use as the poster.
                 */
                Fb::create('image_ref', T\NodeRefType::create())
                    ->build(),
                /*
                 * For imported audio blocks it may be necessary to store the old URL.
                 */
                Fb::create('fallback_src_url', T\TextType::create())
                    ->format(Format::URL())
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
