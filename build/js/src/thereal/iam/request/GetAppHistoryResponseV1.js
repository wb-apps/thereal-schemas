// @link https://schemas.thereal.com/json-schema/thereal/iam/request/get-app-history-response/1-0-0.json#
import GdbotsPbjxGetEventsResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-response/GetEventsResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class GetAppHistoryResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:iam:request:get-app-history-response:1-0-0', GetAppHistoryResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsPbjxGetEventsResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetAppHistoryResponseV1);
MessageResolver.register('thereal:iam:request:get-app-history-response', GetAppHistoryResponseV1);
Object.freeze(GetAppHistoryResponseV1);
Object.freeze(GetAppHistoryResponseV1.prototype);
