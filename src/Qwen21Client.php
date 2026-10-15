<?php

declare(strict_types=1);

namespace RunApi\Qwen21;

use RunApi\Core\BaseClient;
use RunApi\Core\ClientOptions;
use RunApi\Qwen21\Resources\EditImage;
use RunApi\Qwen21\Resources\TextToImage;

/**
 * Qwen 2.1 RunAPI PHP client.
 *
 * The client exposes typed model resources plus the universal `files` and
 * `account` resources.
 */
final class Qwen21Client extends BaseClient
{
    /** Text to image operations for Qwen 2.1. */
    public readonly TextToImage $textToImage;
    /** Image editing operations for Qwen 2.1. */
    public readonly EditImage $editImage;

    /** Create a Qwen 2.1 client with optional API key, base URL, and transport overrides. */
    public function __construct(ClientOptions $options = new ClientOptions())
    {
        parent::__construct($options);
        $this->textToImage = TextToImage::fromHttp($this->http);
        $this->editImage = EditImage::fromHttp($this->http);
    }
}
