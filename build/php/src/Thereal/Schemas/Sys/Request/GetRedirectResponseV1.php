<?php
// @link https://schemas.thereal.com/json-schema/thereal/sys/request/get-redirect-response/1-0-0.json#
namespace Thereal\Schemas\Sys\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Sys\Mixin\GetRedirectResponse\GetRedirectResponseV1 as TrinitiSysGetRedirectResponseV1;
use Triniti\Schemas\Sys\Mixin\GetRedirectResponse\GetRedirectResponseV1Mixin as TrinitiSysGetRedirectResponseV1Mixin;

final class GetRedirectResponseV1 extends AbstractMessage implements
    GetRedirectResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiSysGetRedirectResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:sys:request:get-redirect-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiSysGetRedirectResponseV1Mixin::create(),
            ]
        );
    }
}
