// @link https://schemas.thereal.com/json-schema/thereal/sys/event/redirect-updated/1-0-0.json#
import GdbotsNcrNodeUpdatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-updated/NodeUpdatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class RedirectUpdatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:sys:event:redirect-updated:1-0-0', RedirectUpdatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeUpdatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(RedirectUpdatedV1);
MessageResolver.register('thereal:sys:event:redirect-updated', RedirectUpdatedV1);
Object.freeze(RedirectUpdatedV1);
Object.freeze(RedirectUpdatedV1.prototype);
