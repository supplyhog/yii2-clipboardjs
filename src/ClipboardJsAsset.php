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
		$view->registerJs('
		var clipboard = new Clipboard(\'.clipboard-js-init\');
		clipboard.on(\'success\', function(e) {
            if(typeof e.trigger.dataset.clipboardSuccess !== \'undefined\') {
              e.trigger.innerHtml = e.trigger.dataset.clipboardSuccess;
            }
		});
		clipboard.on(\'error\', function(e) {
			e.trigger.innerHtml = \'Press Ctrl+C to copy\';
		});
		', View::POS_READY, 'clipboard-js-init');
	}
}
