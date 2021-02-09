<?php
// @link https://schemas.thereal.com/json-schema/thereal/news/node/article/1-0-0.json#
namespace Thereal\Schemas\News\Node;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Labelable\LabelableV1 as GdbotsCommonLabelableV1;
use Gdbots\Schemas\Common\Mixin\Labelable\LabelableV1Mixin as GdbotsCommonLabelableV1Mixin;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Expirable\ExpirableV1 as GdbotsNcrExpirableV1;
use Gdbots\Schemas\Ncr\Mixin\Expirable\ExpirableV1Mixin as GdbotsNcrExpirableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1 as GdbotsNcrIndexedV1;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1Mixin as GdbotsNcrIndexedV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Lockable\LockableV1 as GdbotsNcrLockableV1;
use Gdbots\Schemas\Ncr\Mixin\Lockable\LockableV1Mixin as GdbotsNcrLockableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1 as GdbotsNcrNodeV1;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Trait as GdbotsNcrNodeV1Trait;
use Gdbots\Schemas\Ncr\Mixin\Publishable\PublishableV1 as GdbotsNcrPublishableV1;
use Gdbots\Schemas\Ncr\Mixin\Publishable\PublishableV1Mixin as GdbotsNcrPublishableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Sluggable\SluggableV1 as GdbotsNcrSluggableV1;
use Gdbots\Schemas\Ncr\Mixin\Sluggable\SluggableV1Mixin as GdbotsNcrSluggableV1Mixin;
use Triniti\Schemas\Boost\Mixin\Sponsorable\SponsorableV1 as TrinitiBoostSponsorableV1;
use Triniti\Schemas\Boost\Mixin\Sponsorable\SponsorableV1Mixin as TrinitiBoostSponsorableV1Mixin;
use Triniti\Schemas\Canvas\Mixin\HasBlocks\HasBlocksV1 as TrinitiCanvasHasBlocksV1;
use Triniti\Schemas\Canvas\Mixin\HasBlocks\HasBlocksV1Mixin as TrinitiCanvasHasBlocksV1Mixin;
use Triniti\Schemas\Common\Mixin\Advertising\AdvertisingV1 as TrinitiCommonAdvertisingV1;
use Triniti\Schemas\Common\Mixin\Advertising\AdvertisingV1Mixin as TrinitiCommonAdvertisingV1Mixin;
use Triniti\Schemas\Common\Mixin\Seo\SeoV1 as TrinitiCommonSeoV1;
use Triniti\Schemas\Common\Mixin\Seo\SeoV1Mixin as TrinitiCommonSeoV1Mixin;
use Triniti\Schemas\Common\Mixin\Swipeable\SwipeableV1 as TrinitiCommonSwipeableV1;
use Triniti\Schemas\Common\Mixin\Swipeable\SwipeableV1Mixin as TrinitiCommonSwipeableV1Mixin;
use Triniti\Schemas\Common\Mixin\Themeable\ThemeableV1 as TrinitiCommonThemeableV1;
use Triniti\Schemas\Common\Mixin\Themeable\ThemeableV1Mixin as TrinitiCommonThemeableV1Mixin;
use Triniti\Schemas\Curator\Mixin\HasRelatedTeasers\HasRelatedTeasersV1 as TrinitiCuratorHasRelatedTeasersV1;
use Triniti\Schemas\Curator\Mixin\HasRelatedTeasers\HasRelatedTeasersV1Mixin as TrinitiCuratorHasRelatedTeasersV1Mixin;
use Triniti\Schemas\Curator\Mixin\Teaserable\TeaserableV1 as TrinitiCuratorTeaserableV1;
use Triniti\Schemas\Curator\Mixin\Teaserable\TeaserableV1Mixin as TrinitiCuratorTeaserableV1Mixin;
use Triniti\Schemas\News\Mixin\Article\ArticleV1 as TrinitiNewsArticleV1;
use Triniti\Schemas\News\Mixin\Article\ArticleV1Mixin as TrinitiNewsArticleV1Mixin;
use Triniti\Schemas\News\Mixin\Article\ArticleV1Trait as TrinitiNewsArticleV1Trait;
use Triniti\Schemas\Notify\Mixin\HasNotifications\HasNotificationsV1 as TrinitiNotifyHasNotificationsV1;
use Triniti\Schemas\Notify\Mixin\HasNotifications\HasNotificationsV1Mixin as TrinitiNotifyHasNotificationsV1Mixin;
use Triniti\Schemas\People\Mixin\HasPeople\HasPeopleV1 as TrinitiPeopleHasPeopleV1;
use Triniti\Schemas\People\Mixin\HasPeople\HasPeopleV1Mixin as TrinitiPeopleHasPeopleV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\Categorizable\CategorizableV1 as TrinitiTaxonomyCategorizableV1;
use Triniti\Schemas\Taxonomy\Mixin\Categorizable\CategorizableV1Mixin as TrinitiTaxonomyCategorizableV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\HasChannel\HasChannelV1 as TrinitiTaxonomyHasChannelV1;
use Triniti\Schemas\Taxonomy\Mixin\HasChannel\HasChannelV1Mixin as TrinitiTaxonomyHasChannelV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\Hashtaggable\HashtaggableV1 as TrinitiTaxonomyHashtaggableV1;
use Triniti\Schemas\Taxonomy\Mixin\Hashtaggable\HashtaggableV1Mixin as TrinitiTaxonomyHashtaggableV1Mixin;

final class ArticleV1 extends AbstractMessage implements
    Article,
    GdbotsNcrNodeV1,
    TrinitiNewsArticleV1,
    GdbotsCommonLabelableV1,
    GdbotsCommonTaggableV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrIndexedV1,
    GdbotsNcrLockableV1,
    GdbotsNcrPublishableV1,
    GdbotsNcrSluggableV1,
    TrinitiBoostSponsorableV1,
    TrinitiCanvasHasBlocksV1,
    TrinitiCommonAdvertisingV1,
    TrinitiCommonSeoV1,
    TrinitiCommonSwipeableV1,
    TrinitiCommonThemeableV1,
    TrinitiCuratorHasRelatedTeasersV1,
    TrinitiCuratorTeaserableV1,
    TrinitiNotifyHasNotificationsV1,
    TrinitiPeopleHasPeopleV1,
    TrinitiTaxonomyCategorizableV1,
    TrinitiTaxonomyHasChannelV1,
    TrinitiTaxonomyHashtaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiNewsArticleV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:news:node:article:1-0-0', __CLASS__,
            [
                Fb::create('geo_point', T\GeoPointType::create())
                    ->build(),
            ],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiNewsArticleV1Mixin::create(),
                GdbotsCommonLabelableV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
                GdbotsNcrExpirableV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsNcrLockableV1Mixin::create(),
                GdbotsNcrPublishableV1Mixin::create(),
                GdbotsNcrSluggableV1Mixin::create(),
                TrinitiBoostSponsorableV1Mixin::create(),
                TrinitiCanvasHasBlocksV1Mixin::create(),
                TrinitiCommonAdvertisingV1Mixin::create(),
                TrinitiCommonSeoV1Mixin::create(),
                TrinitiCommonSwipeableV1Mixin::create(),
                TrinitiCommonThemeableV1Mixin::create(),
                TrinitiCuratorHasRelatedTeasersV1Mixin::create(),
                TrinitiCuratorTeaserableV1Mixin::create(),
                TrinitiNotifyHasNotificationsV1Mixin::create(),
                TrinitiPeopleHasPeopleV1Mixin::create(),
                TrinitiTaxonomyCategorizableV1Mixin::create(),
                TrinitiTaxonomyHasChannelV1Mixin::create(),
                TrinitiTaxonomyHashtaggableV1Mixin::create(),
            ]
        );
    }
}
