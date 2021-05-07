<?php

namespace YOOtheme;

return [

    'transforms' => [

        'render' => function ($node) {
        	$format = $node->props['format'] ?? 'Y-m-d H:i:s';

            if ($format === 'other') {
                $format = $node->props['custom_format'] ?? $format;
            }

            $node->props['current_date'] = (new \Datetime())->format($format);
            return true;

        },

    ],

];
