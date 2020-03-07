<?php

namespace App\Transformers;

/**
 * Class ArticleTagTransformer
 *
 * @package App\Transformers
 */
class ArticleTagTransformer extends Transformer
{
    /**
     * @param array $data
     *
     * @return array
     */
    public function transformIndex(array $data): array
    {
        return $data;
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function transformShow(array $data): array
    {
        return $data;
    }
}
