<?php
/**
 * 配置不同版本api特有的处理action映射，
 */
return [
    1 => require(__DIR__.'/api-actions/v1.php'),
    2 => require(__DIR__.'/api-actions/v2.php'),
];