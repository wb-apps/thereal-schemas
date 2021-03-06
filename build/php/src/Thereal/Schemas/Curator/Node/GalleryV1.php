<?php
declare(strict_types=1);

// @link https://schemas.thereal.com/json-schema/thereal/curator/node/gallery/1-0-0.json#
namespace Thereal\Schemas\Curator\Node;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Triniti\Schemas\Curator\Mixin\Gallery\GalleryV1Mixin as TrinitiCuratorGalleryV1Mixin;

final class GalleryV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:thereal:curator:node:gallery:1-0-0';
    const SCHEMA_CURIE = 'thereal:curator:node:gallery';
    const SCHEMA_CURIE_MAJOR = 'thereal:curator:node:gallery:v1';
    const MIXINS = [
      'gdbots:ncr:mixin:node:v1',
      'gdbots:ncr:mixin:node',
      'triniti:curator:mixin:gallery:v1',
      'triniti:curator:mixin:gallery',
      'gdbots:common:mixin:labelable:v1',
      'gdbots:common:mixin:labelable',
      'gdbots:common:mixin:taggable:v1',
      'gdbots:common:mixin:taggable',
      'gdbots:ncr:mixin:expirable:v1',
      'gdbots:ncr:mixin:expirable',
      'gdbots:ncr:mixin:indexed:v1',
      'gdbots:ncr:mixin:indexed',
      'gdbots:ncr:mixin:publishable:v1',
      'gdbots:ncr:mixin:publishable',
      'gdbots:ncr:mixin:sluggable:v1',
      'gdbots:ncr:mixin:sluggable',
      'triniti:boost:mixin:sponsorable:v1',
      'triniti:boost:mixin:sponsorable',
      'triniti:common:mixin:advertising:v1',
      'triniti:common:mixin:advertising',
      'triniti:common:mixin:custom-code:v1',
      'triniti:common:mixin:custom-code',
      'triniti:common:mixin:seo:v1',
      'triniti:common:mixin:seo',
      'triniti:common:mixin:themeable:v1',
      'triniti:common:mixin:themeable',
      'triniti:curator:mixin:teaserable:v1',
      'triniti:curator:mixin:teaserable',
      'triniti:people:mixin:has-people:v1',
      'triniti:people:mixin:has-people',
      'triniti:taxonomy:mixin:categorizable:v1',
      'triniti:taxonomy:mixin:categorizable',
      'triniti:taxonomy:mixin:has-channel:v1',
      'triniti:taxonomy:mixin:has-channel',
      'triniti:taxonomy:mixin:hashtaggable:v1',
      'triniti:taxonomy:mixin:hashtaggable',
    ];

    use GdbotsNcrNodeV1Mixin;

    use TrinitiCuratorGalleryV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                /*
                 * The "_id" value:
                 * - MUST NOT change for the life of the node.
                 * - SHOULD be globally unique
                 * - SHOULD be generated by the app (ideally in default value closure... e.g. UuidIdentifier::generate())
                 */
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return UuidIdentifier::generate(); })
                    ->className(UuidIdentifier::class)
                    ->overridable(true)
                    ->build(),
                Fb::create('status', T\StringEnumType::create())
                    ->withDefault("draft")
                    ->className(NodeStatus::class)
                    ->build(),
                Fb::create('etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                Fb::create('created_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * A fully qualified reference to what created this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that creates nodes, not a user.
                 */
                Fb::create('creator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('updated_at', T\MicrotimeType::create())
                    ->useTypeDefault(false)
                    ->build(),
                /*
                 * A fully qualified reference to what updated this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that updates nodes, not a user.
                 * E.g. "acme:iam:node:app:cli-scheduler" or "acme:iam:node:user:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('updater_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * A reference to the last event that changed the state of this node.
                 * E.g. "acme:blog:event:article-published:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('last_event_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('title', T\StringType::create())
                    ->build(),
                /*
                 * A reference to the image asset to use as the cover/primary.
                 */
                Fb::create('image_ref', T\NodeRefType::create())
                    ->build(),
                /*
                 * A credit is a short string used to publicly acknowledge the source/creator
                 * of the contents of this gallery. e.g. "Fox News", "CNN".
                 */
                Fb::create('credit', T\StringType::create())
                    ->build(),
                /*
                 * A URL to link with the credit source.
                 */
                Fb::create('credit_url', T\TextType::create())
                    ->format(Format::URL())
                    ->build(),
                Fb::create('allow_comments', T\BooleanType::create())
                    ->withDefault(true)
                    ->build(),
                Fb::create('launch_text', T\StringType::create())
                    ->build(),
                /*
                 * A description of the gallery (usually a few sentences). It should typically
                 * not have HTML as it is used in metadata, feeds, SERP and social.
                 */
                Fb::create('description', T\TextType::create())
                    ->maxLength(5000)
                    ->build(),
                Fb::create('image_count', T\MediumIntType::create())
                    ->build(),
                /*
                 * A reference to the previous gallery.
                 */
                Fb::create('prev_gallery_ref', T\NodeRefType::create())
                    ->build(),
                /*
                 * A reference to the next gallery.
                 */
                Fb::create('next_gallery_ref', T\NodeRefType::create())
                    ->build(),
                Fb::create('related_gallery_refs', T\NodeRefType::create())
                    ->asAList()
                    ->build(),
                /*
                 * A set of strings used for categorization or workflow.
                 * Similar to slack channels, github or gmail labels.
                 */
                Fb::create('labels', T\StringType::create())
                    ->asASet()
                    ->pattern('^[\w-]+$')
                    ->build(),
                /*
                 * Tags is a map that categorizes data or tracks references in
                 * external systems. The tags names should be consistent and descriptive,
                 * e.g. fb_user_id:123, salesforce_customer_id:456.
                 */
                Fb::create('tags', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('expires_at', T\DateTimeType::create())
                    ->build(),
                Fb::create('published_at', T\DateTimeType::create())
                    ->build(),
                /*
                 * The "slug" is a secondary identifier, typically used in a url:
                 * - MUST be url friendly
                 * - SHOULD NOT be case sensitive
                 * - SHOULD be unique within the message curie namespace
                 * - CAN be changed, but in practice once nodes are published you should avoid it if possible
                 */
                Fb::create('slug', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
                Fb::create('sponsor_ref', T\NodeRefType::create())
                    ->build(),
                Fb::create('ads_enabled', T\BooleanType::create())
                    ->withDefault(true)
                    ->build(),
                Fb::create('dfp_ad_unit_path', T\StringType::create())
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('dfp_cust_params', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                /*
                 * A map containing (HTML, JavaScript, CSS, etc.) that is injected into
                 * an application at a named insertion point, e.g. "html_head" or "footer".
                 */
                Fb::create('custom_code', T\TextType::create())
                    ->asAMap()
                    ->build(),
                Fb::create('seo_title', T\StringType::create())
                    ->build(),
                /*
                 * A reference to the image asset to use for SEO instead of
                 * the usual image_ref.
                 */
                Fb::create('seo_image_ref', T\NodeRefType::create())
                    ->build(),
                /*
                 * Allows customization of the publish date for SEO purposes.
                 */
                Fb::create('seo_published_at', T\DateTimeType::create())
                    ->build(),
                /*
                 * Allows customization of the updated date for SEO purposes. For example
                 * if something meaningful is updated this date should be used instead of
                 * the node's normal updated_at field which accounts for every change.
                 */
                Fb::create('seo_updated_at', T\DateTimeType::create())
                    ->build(),
                Fb::create('meta_description', T\TextType::create())
                    ->maxLength(5000)
                    ->build(),
                Fb::create('meta_keywords', T\StringType::create())
                    ->asASet()
                    ->build(),
                /*
                 * Unlisted content will not show up in any search results
                 * but can still be viewed if you know the URL.
                 */
                Fb::create('is_unlisted', T\BooleanType::create())
                    ->build(),
                /*
                 * A string used to indicate that a visual treatment should be
                 * applied to a piece of content, e.g. "christmas" or "taco".
                 */
                Fb::create('theme', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
                /*
                 * Determines the sequence that this teaserable node will be rendered
                 * in lists, search results, etc. It DOES NOT control visibility or
                 * publishing. A date was used over an integer (e.g. seq_no) for
                 * blog-like, reverse chronological, clarity in sorting.
                 */
                Fb::create('order_date', T\DateTimeType::create())
                    ->build(),
                Fb::create('primary_person_refs', T\NodeRefType::create())
                    ->asASet()
                    ->build(),
                Fb::create('person_refs', T\NodeRefType::create())
                    ->asASet()
                    ->build(),
                Fb::create('category_refs', T\NodeRefType::create())
                    ->asASet()
                    ->build(),
                Fb::create('channel_ref', T\NodeRefType::create())
                    ->build(),
                Fb::create('hashtags', T\StringType::create())
                    ->asASet()
                    ->format(Format::HASHTAG())
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
