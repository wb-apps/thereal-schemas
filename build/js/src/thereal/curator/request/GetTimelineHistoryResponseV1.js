// @link https://schemas.thereal.com/json-schema/thereal/curator/request/get-timeline-history-response/1-0-0.json#
import GdbotsPbjxGetEventsResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-response/GetEventsResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class GetTimelineHistoryResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:curator:request:get-timeline-history-response:1-0-0', GetTimelineHistoryResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsPbjxGetEventsResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetTimelineHistoryResponseV1);
MessageResolver.register('thereal:curator:request:get-timeline-history-response', GetTimelineHistoryResponseV1);
Object.freeze(GetTimelineHistoryResponseV1);
Object.freeze(GetTimelineHistoryResponseV1.prototype);
