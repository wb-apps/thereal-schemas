// @link https://schemas.thereal.com/json-schema/thereal/curator/node/channel-teaser/1-0-0.json#
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrExpirableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expirable/ExpirableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import GdbotsNcrPublishableV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publishable/PublishableV1Mixin';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiBoostSponsorableV1Mixin from '@triniti/schemas/triniti/boost/mixin/sponsorable/SponsorableV1Mixin';
import TrinitiCommonAdvertisingV1Mixin from '@triniti/schemas/triniti/common/mixin/advertising/AdvertisingV1Mixin';
import TrinitiCommonSeoV1Mixin from '@triniti/schemas/triniti/common/mixin/seo/SeoV1Mixin';
import TrinitiCommonSwipeableV1Mixin from '@triniti/schemas/triniti/common/mixin/swipeable/SwipeableV1Mixin';
import TrinitiCommonThemeableV1Mixin from '@triniti/schemas/triniti/common/mixin/themeable/ThemeableV1Mixin';
import TrinitiCuratorChannelTeaserV1Mixin from '@triniti/schemas/triniti/curator/mixin/channel-teaser/ChannelTeaserV1Mixin';
import TrinitiCuratorChannelTeaserV1Trait from '@triniti/schemas/triniti/curator/mixin/channel-teaser/ChannelTeaserV1Trait';
import TrinitiCuratorTeaserHasTargetV1Mixin from '@triniti/schemas/triniti/curator/mixin/teaser-has-target/TeaserHasTargetV1Mixin';
import TrinitiCuratorTeaserV1Mixin from '@triniti/schemas/triniti/curator/mixin/teaser/TeaserV1Mixin';
import TrinitiPeopleHasPeopleV1Mixin from '@triniti/schemas/triniti/people/mixin/has-people/HasPeopleV1Mixin';
import TrinitiTaxonomyCategorizableV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/categorizable/CategorizableV1Mixin';
import TrinitiTaxonomyHasChannelV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/has-channel/HasChannelV1Mixin';
import TrinitiTaxonomyHashtaggableV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/hashtaggable/HashtaggableV1Mixin';

export default class ChannelTeaserV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:curator:node:channel-teaser:1-0-0', ChannelTeaserV1,
      [],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiCuratorTeaserV1Mixin.create(),
        TrinitiCuratorTeaserHasTargetV1Mixin.create(),
        TrinitiCuratorChannelTeaserV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
        GdbotsNcrExpirableV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        GdbotsNcrPublishableV1Mixin.create(),
        TrinitiBoostSponsorableV1Mixin.create(),
        TrinitiCommonAdvertisingV1Mixin.create(),
        TrinitiCommonSeoV1Mixin.create(),
        TrinitiCommonSwipeableV1Mixin.create(),
        TrinitiCommonThemeableV1Mixin.create(),
        TrinitiPeopleHasPeopleV1Mixin.create(),
        TrinitiTaxonomyCategorizableV1Mixin.create(),
        TrinitiTaxonomyHasChannelV1Mixin.create(),
        TrinitiTaxonomyHashtaggableV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(ChannelTeaserV1);
TrinitiCuratorChannelTeaserV1Trait(ChannelTeaserV1);
MessageResolver.register('thereal:curator:node:channel-teaser', ChannelTeaserV1);
Object.freeze(ChannelTeaserV1);
Object.freeze(ChannelTeaserV1.prototype);
