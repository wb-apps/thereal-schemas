// @link https://schemas.thereal.com/json-schema/thereal/sys/request/get-redirect-request/1-0-0.json#
import GdbotsNcrGetNodeRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-request/GetNodeRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class GetRedirectRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:sys:request:get-redirect-request:1-0-0', GetRedirectRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetRedirectRequestV1);
MessageResolver.register('thereal:sys:request:get-redirect-request', GetRedirectRequestV1);
Object.freeze(GetRedirectRequestV1);
Object.freeze(GetRedirectRequestV1.prototype);
