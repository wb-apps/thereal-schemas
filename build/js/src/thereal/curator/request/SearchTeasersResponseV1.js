// @link https://schemas.thereal.com/json-schema/thereal/curator/request/search-teasers-response/1-0-0.json#
import GdbotsNcrSearchNodesResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/search-nodes-response/SearchNodesResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCuratorSearchTeasersResponseV1Mixin from '@triniti/schemas/triniti/curator/mixin/search-teasers-response/SearchTeasersResponseV1Mixin';
import TrinitiCuratorWidgetSearchResponseV1Mixin from '@triniti/schemas/triniti/curator/mixin/widget-search-response/WidgetSearchResponseV1Mixin';

export default class SearchTeasersResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:curator:request:search-teasers-response:1-0-0', SearchTeasersResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrSearchNodesResponseV1Mixin.create(),
        TrinitiCuratorWidgetSearchResponseV1Mixin.create(),
        TrinitiCuratorSearchTeasersResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(SearchTeasersResponseV1);
MessageResolver.register('thereal:curator:request:search-teasers-response', SearchTeasersResponseV1);
Object.freeze(SearchTeasersResponseV1);
Object.freeze(SearchTeasersResponseV1.prototype);
