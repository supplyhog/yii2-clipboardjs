<?php

namespace supplyhog\ClipboardJs;

use yii\web\AssetBundle;
use yii\web\View;

class ClipboardJsAsset extends AssetBundle
{
	public $sourcePath = '@bower/clipboard/dist';
	public $js = [
		'clipboard.min.js',
	];

	public function registerAssetFiles($view)
	{
		parent::registerAssetFiles($view);
		$view->registerJs('new Clipboard(\'.clipboard-js-init\');', View::POS_READY, 'clipboard-js-init');
	}
}
