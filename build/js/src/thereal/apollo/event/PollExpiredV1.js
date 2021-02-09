// @link https://schemas.thereal.com/json-schema/thereal/apollo/event/poll-expired/1-0-0.json#
import GdbotsNcrNodeExpiredV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-expired/NodeExpiredV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class PollExpiredV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:apollo:event:poll-expired:1-0-0', PollExpiredV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeExpiredV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PollExpiredV1);
MessageResolver.register('thereal:apollo:event:poll-expired', PollExpiredV1);
Object.freeze(PollExpiredV1);
Object.freeze(PollExpiredV1.prototype);
