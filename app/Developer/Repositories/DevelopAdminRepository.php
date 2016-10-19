<?php

namespace Developer\Repositories;

use Developer\Model\DevelopAdmin;
use Request;

/**
 * Class DevelopAdminRepository
 * @package Casino\Repositories
 */
class DevelopAdminRepository
{
    /**
     * @var developAdmin
     */
    private $developAdmin;

    /**
     * @var 啟用: normal 關閉: lock, default: normal
     */
    const IS_ACTIVE = 'normal';

    public function __construct(DevelopAdmin $developAdmin)
    {
        $this->developAdmin = $developAdmin;
    }
}