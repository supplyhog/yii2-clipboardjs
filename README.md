# yii2-clipboardjs

An easy way to use [Clipboardjs](https://clipboardjs.com/) in your project. Clipboardjs is a javascript only way to copy text to the clipboard.


## Installation

Install this extension via [composer](http://getcomposer.org/download). Add this line to your project’s composer.json

```php
"supplyhog/yii2-clipboardjs" : "dev-master"
```

## Usage

```php
//Button to copy text
<?= \supplyhog\ClipboardJs\ClipboardJsWidget::widget([
    'text' => "Hello World",
    // 'label' => 'Copy to clipboard',
    // 'htmlOptions' => ['class' => 'btn'],
    // 'tag' => 'button',
]) ?>

//Button to copy text from input id
<?= \supplyhog\ClipboardJs\ClipboardJsWidget::widget([
    'inputId' => "#input-url",
    // 'cut' => false, // Cut the text out of the input instead of copy?
    // 'label' => 'Copy to clipboard',
    // 'htmlOptions' => ['class' => 'btn'],
    // 'tag' => 'button',
]) ?>

```
