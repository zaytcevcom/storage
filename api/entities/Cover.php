<?php

declare(strict_types=1);

namespace api\entities;

use api\classes\Entity;

/**
 * @property int $id
 * @property string $file_id
 * @property string $media_type
 * @property int $type
 * @property string $host
 * @property string $dir
 * @property string $name
 * @property string $ext
 * @property double $size
 * @property string $hash
 * @property string $sizes
 * @property int $time
 * @property int $hide
 * @property int $resize_status
 */
class Cover extends Entity
{
    protected $table = 'cover';

    protected $fillable = [
        'file_id',
        'media_type',
        'type',
        'host',
        'dir',
        'name',
        'ext',
        'size',
        'hash',
        'sizes',
        'time',
        'hide',
        'resize_status'
    ];

    protected $casts = [
        'id'            => 'integer',
        'file_id'       => 'string',
        'media_type'    => 'string',
        'type'          => 'integer',
        'host'          => 'string',
        'dir'           => 'string',
        'name'          => 'string',
        'ext'           => 'string',
        'size'          => 'double',
        'hash'          => 'string',
        'sizes'         => 'string',
        'time'          => 'integer',
        'hide'          => 'integer',
        'resize_status' => 'integer'
    ];

    const ERROR_REQUIRED_FIELDS = self::class . 1;
    const ERROR_SECRET_KEY      = self::class . 2;
    const ERROR_TYPE            = self::class . 3;
    const ERROR_NOT_FOUND       = self::class . 4;
    const ERROR_FAIL_UPLOAD     = self::class . 5;
    const ERROR_FAIL_MOVE       = self::class . 6;
    const ERROR_MIN_SIZE        = self::class . 7;
    const ERROR_MAX_SIZE        = self::class . 8;
    const ERROR_ALLOW_TYPES     = self::class . 9;
    const ERROR_OPTIMIZE        = self::class . 10;
    const ERROR_CROP            = self::class . 11;

    const SALT = 'cover';
}