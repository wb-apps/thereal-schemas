// @link https://schemas.thereal.com/json-schema/thereal/curator/command/expire-gallery/1-0-0.json#
import GdbotsNcrExpireNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expire-node/ExpireNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class ExpireGalleryV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:curator:command:expire-gallery:1-0-0', ExpireGalleryV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrExpireNodeV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(ExpireGalleryV1);
MessageResolver.register('thereal:curator:command:expire-gallery', ExpireGalleryV1);
Object.freeze(ExpireGalleryV1);
Object.freeze(ExpireGalleryV1.prototype);
