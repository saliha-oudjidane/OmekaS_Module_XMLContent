<?php

return [
    'file_renderers' => [
        'invokables' => [
            'xml_content' => 'XMLContent\XmlContent',
        ],
        'aliases' => [
            'application/xml' => 'xml_content',
            'xml' => 'xml_content',
        ],
    ],
];



?>