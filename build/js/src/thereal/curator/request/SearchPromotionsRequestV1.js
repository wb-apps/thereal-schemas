// @link https://schemas.thereal.com/json-schema/thereal/curator/request/search-promotions-request/1-0-0.json#
import GdbotsNcrSearchNodesRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/search-nodes-request/SearchNodesRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCuratorSearchPromotionsRequestV1Mixin from '@triniti/schemas/triniti/curator/mixin/search-promotions-request/SearchPromotionsRequestV1Mixin';

export default class SearchPromotionsRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:curator:request:search-promotions-request:1-0-0', SearchPromotionsRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrSearchNodesRequestV1Mixin.create(),
        TrinitiCuratorSearchPromotionsRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(SearchPromotionsRequestV1);
MessageResolver.register('thereal:curator:request:search-promotions-request', SearchPromotionsRequestV1);
Object.freeze(SearchPromotionsRequestV1);
Object.freeze(SearchPromotionsRequestV1.prototype);
