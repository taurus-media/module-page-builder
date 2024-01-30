<?php
/**
 * Copyright (c) 2024. Taurus. All rights reserved
 * @author Alexander Tolochko
 */

namespace Taurus\PageBuilder\Plugin;

use Magento\Cms\Model\Wysiwyg\Validator;
use Magento\Framework\App\Config\ScopeConfigInterface;

class WysiwygValidatorPlugin
{
    /**
     * @var ScopeConfigInterface
     */
    private $config;

    /**
     * @param ScopeConfigInterface $config
     */
    public function __construct(
        ScopeConfigInterface $config
    ) {
        $this->config = $config;
    }

    /**
     * Validate wysiwyg content only if 'Throw Errors' setting is enabled
     *
     * @param Validator $validator
     * @param callable $proceed
     * @param string $content
     * @return void
     */
    public function aroundValidate(Validator $validator, callable $proceed, string $content): void
    {
        if ($this->config->isSetFlag(Validator::CONFIG_PATH_THROW_EXCEPTION)) {
            $proceed($content);
        }
    }
}
