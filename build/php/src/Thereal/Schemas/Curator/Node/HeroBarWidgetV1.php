<?php
// @link https://schemas.thereal.com/json-schema/thereal/curator/node/hero-bar-widget/1-0-0.json#
namespace Thereal\Schemas\Curator\Node;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1 as GdbotsNcrIndexedV1;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1Mixin as GdbotsNcrIndexedV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1 as GdbotsNcrNodeV1;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Trait as GdbotsNcrNodeV1Trait;
use Triniti\Schemas\Common\Mixin\Themeable\ThemeableV1 as TrinitiCommonThemeableV1;
use Triniti\Schemas\Common\Mixin\Themeable\ThemeableV1Mixin as TrinitiCommonThemeableV1Mixin;
use Triniti\Schemas\Curator\Mixin\HeroBarWidget\HeroBarWidgetV1 as TrinitiCuratorHeroBarWidgetV1;
use Triniti\Schemas\Curator\Mixin\HeroBarWidget\HeroBarWidgetV1Mixin as TrinitiCuratorHeroBarWidgetV1Mixin;
use Triniti\Schemas\Curator\Mixin\HeroBarWidget\HeroBarWidgetV1Trait as TrinitiCuratorHeroBarWidgetV1Trait;
use Triniti\Schemas\Curator\Mixin\WidgetHasSearchRequest\WidgetHasSearchRequestV1 as TrinitiCuratorWidgetHasSearchRequestV1;
use Triniti\Schemas\Curator\Mixin\WidgetHasSearchRequest\WidgetHasSearchRequestV1Mixin as TrinitiCuratorWidgetHasSearchRequestV1Mixin;
use Triniti\Schemas\Curator\Mixin\Widget\WidgetV1 as TrinitiCuratorWidgetV1;
use Triniti\Schemas\Curator\Mixin\Widget\WidgetV1Mixin as TrinitiCuratorWidgetV1Mixin;

final class HeroBarWidgetV1 extends AbstractMessage implements
    HeroBarWidget,
    GdbotsNcrNodeV1,
    TrinitiCuratorWidgetV1,
    TrinitiCuratorHeroBarWidgetV1,
    GdbotsCommonTaggableV1,
    GdbotsNcrIndexedV1,
    TrinitiCommonThemeableV1,
    TrinitiCuratorWidgetHasSearchRequestV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiCuratorHeroBarWidgetV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:curator:node:hero-bar-widget:1-0-0', __CLASS__,
            [],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiCuratorWidgetV1Mixin::create(),
                TrinitiCuratorHeroBarWidgetV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                TrinitiCommonThemeableV1Mixin::create(),
                TrinitiCuratorWidgetHasSearchRequestV1Mixin::create(),
            ]
        );
    }
}
