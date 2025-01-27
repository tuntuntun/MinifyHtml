<?php

namespace WyriHaximus\MinifyHtml;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;

class Plugin extends BasePlugin
{
  public function bootstrap(PluginApplicationInterface $app): void
  {
    parent::bootstrap($app);
    // 必要に応じて、ミドルウェアやイベントリスナーを登録
  }
}
