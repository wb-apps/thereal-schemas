// @link https://schemas.thereal.com/json-schema/thereal/curator/event/promotion-deleted/1-0-0.json#
import GdbotsNcrNodeDeletedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-deleted/NodeDeletedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class PromotionDeletedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:curator:event:promotion-deleted:1-0-0', PromotionDeletedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeDeletedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PromotionDeletedV1);
MessageResolver.register('thereal:curator:event:promotion-deleted', PromotionDeletedV1);
Object.freeze(PromotionDeletedV1);
Object.freeze(PromotionDeletedV1.prototype);
