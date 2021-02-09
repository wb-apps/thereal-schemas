<?php
// @link https://schemas.thereal.com/json-schema/thereal/dam/node/document-asset/1-0-0.json#
namespace Thereal\Schemas\Dam\Node;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Expirable\ExpirableV1 as GdbotsNcrExpirableV1;
use Gdbots\Schemas\Ncr\Mixin\Expirable\ExpirableV1Mixin as GdbotsNcrExpirableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1 as GdbotsNcrIndexedV1;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1Mixin as GdbotsNcrIndexedV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1 as GdbotsNcrNodeV1;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Trait as GdbotsNcrNodeV1Trait;
use Triniti\Schemas\Dam\Mixin\Asset\AssetV1 as TrinitiDamAssetV1;
use Triniti\Schemas\Dam\Mixin\Asset\AssetV1Mixin as TrinitiDamAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\DocumentAsset\DocumentAssetV1 as TrinitiDamDocumentAssetV1;
use Triniti\Schemas\Dam\Mixin\DocumentAsset\DocumentAssetV1Mixin as TrinitiDamDocumentAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\DocumentAsset\DocumentAssetV1Trait as TrinitiDamDocumentAssetV1Trait;
use Triniti\Schemas\People\Mixin\HasPeople\HasPeopleV1 as TrinitiPeopleHasPeopleV1;
use Triniti\Schemas\People\Mixin\HasPeople\HasPeopleV1Mixin as TrinitiPeopleHasPeopleV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\Hashtaggable\HashtaggableV1 as TrinitiTaxonomyHashtaggableV1;
use Triniti\Schemas\Taxonomy\Mixin\Hashtaggable\HashtaggableV1Mixin as TrinitiTaxonomyHashtaggableV1Mixin;

final class DocumentAssetV1 extends AbstractMessage implements
    DocumentAsset,
    GdbotsNcrNodeV1,
    TrinitiDamAssetV1,
    TrinitiDamDocumentAssetV1,
    GdbotsCommonTaggableV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrIndexedV1,
    TrinitiPeopleHasPeopleV1,
    TrinitiTaxonomyHashtaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiDamDocumentAssetV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:thereal:dam:node:document-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiDamAssetV1Mixin::create(),
                TrinitiDamDocumentAssetV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
                GdbotsNcrExpirableV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                TrinitiPeopleHasPeopleV1Mixin::create(),
                TrinitiTaxonomyHashtaggableV1Mixin::create(),
            ]
        );
    }
}
