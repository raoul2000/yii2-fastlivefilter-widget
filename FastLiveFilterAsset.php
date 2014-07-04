<?php
namespace raoul2000\widget\fastlivefilter;

use yii\web\AssetBundle;

/**
 * @author Raoul <raoul.boulard@gmail.com>
 */
class FastLiveFilterAsset extends AssetBundle
{
	public $js = [
		'jquery.fastLiveFilter.js'
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
	public function init() {
		$this->sourcePath = __DIR__.'/assets';
		return parent::init();
	}
}
