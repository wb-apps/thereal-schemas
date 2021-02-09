// @link https://schemas.thereal.com/json-schema/thereal/apollo/event/poll-unpublished/1-0-0.json#
import GdbotsAnalyticsTrackedMessageV1Mixin from '@gdbots/schemas/gdbots/analytics/mixin/tracked-message/TrackedMessageV1Mixin';
import GdbotsEnrichmentsTimePartingV1Mixin from '@gdbots/schemas/gdbots/enrichments/mixin/time-parting/TimePartingV1Mixin';
import GdbotsEnrichmentsTimeSamplingV1Mixin from '@gdbots/schemas/gdbots/enrichments/mixin/time-sampling/TimeSamplingV1Mixin';
import GdbotsNcrNodeUnpublishedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-unpublished/NodeUnpublishedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class PollUnpublishedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:apollo:event:poll-unpublished:1-0-0', PollUnpublishedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeUnpublishedV1Mixin.create(),
        GdbotsAnalyticsTrackedMessageV1Mixin.create(),
        GdbotsEnrichmentsTimePartingV1Mixin.create(),
        GdbotsEnrichmentsTimeSamplingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PollUnpublishedV1);
MessageResolver.register('thereal:apollo:event:poll-unpublished', PollUnpublishedV1);
Object.freeze(PollUnpublishedV1);
Object.freeze(PollUnpublishedV1.prototype);
