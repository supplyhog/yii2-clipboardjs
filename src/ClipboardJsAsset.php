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
		//Show the full value if the copy fails. This is the final fallback.
		$view->registerJs("
		var clipboard = new Clipboard('.clipboard-js-init');
		clipboard.on('success', function(e) {
            if (typeof e.trigger.dataset.clipboardSuccess !== 'undefined') {
                var reset = e.trigger.innerHTML;
                setTimeout(function(){
                    e.trigger.innerHTML = reset;
                    e.trigger.classList.remove('clipboard-success');
                }, 5000);
                e.trigger.innerHTML = e.trigger.dataset.clipboardSuccess;
                e.trigger.classList.add('clipboard-success');
            }
		});
		clipboard.on('error', function(e) {
			e.trigger.innerHtml = e.trigger.dataset.clipboardText;
		});
		", View::POS_READY, 'clipboard-js-init');
	}
}
