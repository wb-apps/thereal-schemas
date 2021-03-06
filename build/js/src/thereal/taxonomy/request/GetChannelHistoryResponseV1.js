// @link https://schemas.thereal.com/json-schema/thereal/taxonomy/request/get-channel-history-response/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import Message from '@gdbots/pbj/Message';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class GetChannelHistoryResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('response_id', T.UuidType.create())
          .required()
          .build(),
        Fb.create('created_at', T.MicrotimeType.create())
          .build(),
        /*
         * Multi-tenant apps can use this field to track the tenant id.
         */
        Fb.create('ctx_tenant_id', T.StringType.create())
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        Fb.create('ctx_request_ref', T.MessageRefType.create())
          .build(),
        /*
         * The "ctx_request" is the actual request object that "ctx_request_ref" refers to.
         * In some cases it's useful for request handlers to copy the request into the response
         * so the requestor has everything in one message. This will NOT always be populated.
         * A common use case is search request/response cycles where you want to know what the
         * search criteria was so you can render that along with the results.
         */
        Fb.create('ctx_request', T.MessageType.create())
          .anyOfCuries([
            'gdbots:pbjx:mixin:request',
          ])
          .build(),
        Fb.create('ctx_correlator_ref', T.MessageRefType.create())
          .build(),
        /*
         * Responses can include "dereferenced" messages to prevent
         * the consumer from needing to make multiple HTTP requests.
         * It is up to the consumer to make use of the dereferenced
         * messages if/when they are provided.
         */
        Fb.create('derefs', T.MessageType.create())
          .asAMap()
          .build(),
        /*
         * @link https://en.wikipedia.org/wiki/HATEOAS
         */
        Fb.create('links', T.TextType.create())
          .asAMap()
          .build(),
        Fb.create('metas', T.TextType.create())
          .asAMap()
          .build(),
        Fb.create('has_more', T.BooleanType.create())
          .build(),
        /*
         * The last "occurred_at" value from the last event in the "events" list. This can be
         * used as "since" when requesting the next set of events if "has_more" is true.
         */
        Fb.create('last_occurred_at', T.MicrotimeType.create())
          .useTypeDefault(false)
          .build(),
        Fb.create('events', T.MessageType.create())
          .asAList()
          .anyOfCuries([
            'gdbots:pbjx:mixin:event',
          ])
          .overridable(true)
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = GetChannelHistoryResponseV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:thereal:taxonomy:request:get-channel-history-response:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'thereal:taxonomy:request:get-channel-history-response';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'thereal:taxonomy:request:get-channel-history-response:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:response:v1',
  'gdbots:pbjx:mixin:response',
  'gdbots:pbjx:mixin:get-events-response:v1',
  'gdbots:pbjx:mixin:get-events-response',
];

GdbotsPbjxResponseV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
