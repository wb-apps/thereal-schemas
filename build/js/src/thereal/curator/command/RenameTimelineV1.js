// @link https://schemas.thereal.com/json-schema/thereal/curator/command/rename-timeline/1-0-0.json#
import GdbotsNcrRenameNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/rename-node/RenameNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class RenameTimelineV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:curator:command:rename-timeline:1-0-0', RenameTimelineV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrRenameNodeV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(RenameTimelineV1);
MessageResolver.register('thereal:curator:command:rename-timeline', RenameTimelineV1);
Object.freeze(RenameTimelineV1);
Object.freeze(RenameTimelineV1.prototype);
