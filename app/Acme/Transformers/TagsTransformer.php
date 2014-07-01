<?php namespace Acme\Transformers;

/**
 * Class TagsTransformer
 * @package Acme\Transformers
 */
class TagsTransformer extends Transformer {

    /**
     * @param $tag
     * @return array
     */
    public function transform($tag)
    {
        return [
            'name' => $tag['name']
        ];
    }
}