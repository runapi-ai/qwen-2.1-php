<?php

declare(strict_types=1);

namespace RunApi\Qwen21;

final class Types
{
    /**
     * Allowed model slugs for text to image requests.
     *
     * @var list<string>
     */
    public const TEXT_TO_IMAGE_MODELS = ['qwen-2.1-text-to-image'];

    /**
     * Allowed model slugs for image to image requests.
     *
     * @var list<string>
     */
    public const EDIT_IMAGE_MODELS = ['qwen-2.1-edit-image'];

    private function __construct()
    {
    }
}
