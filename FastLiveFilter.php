<?php
namespace raoul2000\widget\fastlivefilter;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

/**
 * FastLiveFilter is a wrapper for the [jQuery Fast Live Filter](http://anthonybush.com/projects/jquery_fast_live_filter/).
 * Check the [GitHub Repo](https://github.com/awbush/jquery-fastLiveFilter)
 */
class FastLiveFilter extends Widget
{

	/**
	 * @var string JQuery selector to attach the live filter to.
	 */
	public $inputSelector;

	/**
	 * @var string JQuery selector for the list to filter
	 */
	public $listSelector;

	/**
	 * @var array Live filter plugin options
	 */
	public $pluginOptions = [];

	public function init()
	{
		parent::init();
		if (empty($this->inputSelector)) {
			throw new InvalidConfigException('The "inputSelector" property must be set.');
		}
		if (empty($this->listSelector)) {
			throw new InvalidConfigException('The "listSelector" property must be set.');
		}
	}

	/**
	 * @see \yii\base\Widget::run()
	 */
	public function run()
	{
		$this->registerClientScript();
	}

	/**
	 * Generate and register javascript to start the plugin
	 */
	public function registerClientScript()
	{
		$view = $this->getView();
		FastLiveFilterAsset::register($view);

		$options = empty($this->pluginOptions) ? "{}" : Json::encode($this->pluginOptions);
		$js = "jQuery(\"{$this->inputSelector}\").fastLiveFilter(\"{$this->listSelector}\"," . $options . ")";
		$view->registerJs($js);
	}
}
