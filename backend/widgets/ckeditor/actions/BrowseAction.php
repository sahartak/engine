<?php

namespace backend\widgets\ckeditor\actions;

use  backend\widgets\ckeditor\models\File;
use Yii;
use yii\base\Security;
use yii\helpers\FileHelper;
use yii\web\ViewAction;
use yii\helpers\Inflector;
use backend\widgets\ckeditor\BrowseAssets;
use Imagine\Image\Box;
use yii\imagine\Image;

/**
 * Class BrowseAction
 * @package bajadev\ckeditor\actions
 */
class BrowseAction extends ViewAction
{

    /**
     * @var Base Url
     */
    public $url;
    /**
     * @var Base Path
     */
    public $path;
    /**
     * @var int Max Width
     */
    public $maxWidth = 800;
    /**
     * @var int Max Height
     */
    public $maxHeight = 800;
    /**
     * @var int image quality
     */
    public $quality = 80;
    /**
     * @var bool Use Hash for filename
     */
    public $useHash = true;

    public function init()
    {
        $this->registerTranslations();
    }

    /**
     * Register widget translations.
     */
    public function registerTranslations()
    {
        if (!isset(Yii::$app->i18n->translations['bajadev/ckeditor']) && !isset(Yii::$app->i18n->translations['bajadev/ckeditor/*'])) {
            Yii::$app->i18n->translations['bajadev/ckeditor'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@vendor/bajadev/yii2-ckeditor/messages',
                'forceTranslation' => true,
                'fileMap' => [
                    'bajadev/ckeditor' => 'ckeditor.php'
                ]
            ];
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {

        if (!file_exists($this->getPath())) {
            FileHelper::createDirectory($this->getPath());
        }

        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if (!empty($post['method'])) {
                $file = basename($post['file']);

                if (file_exists($this->getPath() . $file)) {
                    unlink($this->getPath() . $file);
                }

            } else {
                $image = \yii\web\UploadedFile::getInstanceByName('upload');
                $model = new File();
                $model->file = $image;

                if ($model->validate()) {
                    $fileName = $this->getFileName($image);
                    $image->saveAs($this->getPath() . $fileName);

                    $imagine = Image::getImagine();
                    $photo = $imagine->open($this->getPath() . $fileName);
                    $photo->thumbnail(new Box($this->maxWidth, $this->maxHeight))
                        ->save($this->getPath() . $fileName, ['quality' => $this->quality]);
                } else {
                    echo "<script type='text/javascript'>alert('" . $model->getFirstError('file') . "');</script>";
                    exit;
                }

            }
        }


        BrowseAssets::register($this->controller->view);
        $this->controller->layout = '@ckeditor/views/layout/image';
        $images = FileHelper::findFiles($this->getPath(), ['recursive' => false]);

        return $this->controller->render('@ckeditor/views/browse', [
            'images' => $images,
            'url' => $this->getUrl()
        ]);
    }

    /**
     * @return string
     */
    private function getPath()
    {
        return Yii::getAlias($this->path);
    }

    private function getFileName($image)
    {

        if ($this->useHash) {
            $security = new Security();
            $fileName = $security->generateRandomString(16);

            return $fileName . '.' . $image->getExtension();
        } else {
            return $image->name . '.' . $image->getExtension();
        }
    }

    /**
     * @return string
     */
    private function getUrl()
    {
        return Yii::getAlias($this->url);
    }
}
