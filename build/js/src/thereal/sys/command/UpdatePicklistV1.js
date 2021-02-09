// @link https://schemas.thereal.com/json-schema/thereal/sys/command/update-picklist/1-0-0.json#
import GdbotsNcrUpdateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/update-node/UpdateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class UpdatePicklistV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:sys:command:update-picklist:1-0-0', UpdatePicklistV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUpdateNodeV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UpdatePicklistV1);
MessageResolver.register('thereal:sys:command:update-picklist', UpdatePicklistV1);
Object.freeze(UpdatePicklistV1);
Object.freeze(UpdatePicklistV1.prototype);
