// @link https://schemas.thereal.com/json-schema/thereal/curator/node/alert-widget/1-0-0.json#
import GdbotsCommonTaggableV1Mixin from '@gdbots/schemas/gdbots/common/mixin/taggable/TaggableV1Mixin';
import GdbotsNcrIndexedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/indexed/IndexedV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCommonThemeableV1Mixin from '@triniti/schemas/triniti/common/mixin/themeable/ThemeableV1Mixin';
import TrinitiCuratorAlertWidgetV1Mixin from '@triniti/schemas/triniti/curator/mixin/alert-widget/AlertWidgetV1Mixin';
import TrinitiCuratorAlertWidgetV1Trait from '@triniti/schemas/triniti/curator/mixin/alert-widget/AlertWidgetV1Trait';
import TrinitiCuratorWidgetHasSearchRequestV1Mixin from '@triniti/schemas/triniti/curator/mixin/widget-has-search-request/WidgetHasSearchRequestV1Mixin';
import TrinitiCuratorWidgetV1Mixin from '@triniti/schemas/triniti/curator/mixin/widget/WidgetV1Mixin';

export default class AlertWidgetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:thereal:curator:node:alert-widget:1-0-0', AlertWidgetV1,
      [],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiCuratorWidgetV1Mixin.create(),
        TrinitiCuratorAlertWidgetV1Mixin.create(),
        GdbotsCommonTaggableV1Mixin.create(),
        GdbotsNcrIndexedV1Mixin.create(),
        TrinitiCommonThemeableV1Mixin.create(),
        TrinitiCuratorWidgetHasSearchRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(AlertWidgetV1);
TrinitiCuratorAlertWidgetV1Trait(AlertWidgetV1);
MessageResolver.register('thereal:curator:node:alert-widget', AlertWidgetV1);
Object.freeze(AlertWidgetV1);
Object.freeze(AlertWidgetV1.prototype);
