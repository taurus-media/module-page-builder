<?php
/**
 * Copyright (c) 2024. Taurus. All rights reserved
 * @author Alexander Tolochko
 */

namespace Taurus\PageBuilder\Model\Wysiwyg;

use Magento\PageBuilder\Model\Wysiwyg\DefaultConfigProvider;

class DefaultConfigProviderRewrite extends DefaultConfigProvider
{
    public function getConfig(\Magento\Framework\DataObject $config): \Magento\Framework\DataObject
    {
        $config = parent::getConfig($config);

        $configData = $config->getData();

        $configData['settings']['style_formats'] = [
            [
                'title' => 'Heading Style',
                'items' => [
                    [
                        'title' => 'Text H1',
                        'selector' => 'p,div,td,th,li',
                        'attributes' => [
                            'class' => 'h1'
                        ]
                    ],
                    [
                        'title' => 'Text H2',
                        'selector' => 'p,div,td,th,li',
                        'attributes' => [
                            'class' => 'h2'
                        ]
                    ],
                    [
                        'title' => 'Text H3',
                        'selector' => 'p,div,td,th,li',
                        'attributes' => [
                            'class' => 'h3'
                        ]
                    ],
                    [
                        'title' => 'Text H4',
                        'selector' => 'p,div,td,th,li',
                        'attributes' => [
                            'class' => 'h4'
                        ]
                    ],
                    [
                        'title' => 'Text H5',
                        'selector' => 'p,div,td,th,li',
                        'attributes' => [
                            'class' => 'h5'
                        ]
                    ],
                    [
                        'title' => 'Text H6',
                        'selector' => 'p,div,td,th,li',
                        'attributes' => [
                            'class' => 'h6'
                        ]
                    ],
                ]
            ]
        ];

        $config->setData($configData);

        return $config;
    }
}
