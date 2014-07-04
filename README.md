yii2-fastlivefilter-widget
==========================
Wrapper around the [jQuery Fast Live Filter](http://anthonybush.com/projects/jquery_fast_live_filter/) plugin.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist raoul2000/yii2-fastlivefilter-widget "*"
```

or add

```
"raoul2000/yii2-fastlivefilter-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----
This is an example no how to use this extension once it is installed.

First let's create our HTML list and the filter input control :

```html
<input type="text" id="countryLivefilter"/>
<ul id="countryList">
	<li>France</li>
	<li>Allemagne</li>
	<li>Italie</li>
	<li>Espagne</li>
	<li>Belgique</li>
</ul>	
```

Finally create the Fast Live filter widget :

```php
	<?= raoul2000\widget\fastlivefilter\FastLiveFilter::widget([
			'inputSelector' => '#countryLivefilter',
			'listSelector'  => '#countryList'
		])
	?>
```

For more information on the plugin options, please refer to [fastlivefilter@github](https://github.com/awbush/jquery-fastLiveFilter).

License
-------

**yii2-fastlivefilter-widget** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.