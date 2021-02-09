// @link https://schemas.thereal.com/json-schema/thereal/boost/command/unpublish-sponsor/1-0-0.json#
import GdbotsNcrUnpublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/unpublish-node/UnpublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class UnpublishSponsorV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:boost:command:unpublish-sponsor:1-0-0', UnpublishSponsorV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUnpublishNodeV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UnpublishSponsorV1);
MessageResolver.register('thereal:boost:command:unpublish-sponsor', UnpublishSponsorV1);
Object.freeze(UnpublishSponsorV1);
Object.freeze(UnpublishSponsorV1.prototype);
