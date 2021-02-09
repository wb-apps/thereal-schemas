<?php
// @link https://schemas.thereal.com/json-schema/thereal/apollo/poll-answer/1-0-0.json#
namespace Thereal\Schemas\Apollo;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Triniti\Schemas\Apollo\Mixin\PollAnswer\PollAnswerV1 as TrinitiApolloPollAnswerV1;
use Triniti\Schemas\Apollo\Mixin\PollAnswer\PollAnswerV1Mixin as TrinitiApolloPollAnswerV1Mixin;
use Triniti\Schemas\Apollo\Mixin\PollAnswer\PollAnswerV1Trait as TrinitiApolloPollAnswerV1Trait;

final class PollAnswerV1 extends AbstractMessage implements
    PollAnswer,
    TrinitiApolloPollAnswerV1
{
    use TrinitiApolloPollAnswerV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:apollo::poll-answer:1-0-0', __CLASS__,
            [],
            [
                TrinitiApolloPollAnswerV1Mixin::create(),
            ]
        );
    }
}
