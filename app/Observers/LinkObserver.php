<?php
/**
 * Created by PhpStorm.
 * User: zhangbaiyu
 * Date: 2018/8/31
 * Time: 上午1:11
 */

namespace App\Observers;

use App\Models\Link;
use Cache;

class LinkObserver
{
    // 在保存时清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}