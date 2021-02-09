// @link https://schemas.thereal.com/json-schema/thereal/boost/command/create-sponsor/1-0-0.json#
import GdbotsNcrCreateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/create-node/CreateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class CreateSponsorV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:boost:command:create-sponsor:1-0-0', CreateSponsorV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrCreateNodeV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(CreateSponsorV1);
MessageResolver.register('thereal:boost:command:create-sponsor', CreateSponsorV1);
Object.freeze(CreateSponsorV1);
Object.freeze(CreateSponsorV1.prototype);
