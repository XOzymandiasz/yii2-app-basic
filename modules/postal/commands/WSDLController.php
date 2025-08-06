<?php

namespace app\modules\postal\commands;

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;
use Yii;
use yii\console\Controller;
use yii\helpers\Console;

class WSDLController extends Controller
{

    public function actionGenerate(string $wsdl = null): void
    {
        if($wsdl === null){
            $wsdl = 'https://en-testwebapi.poczta-polska.pl/websrv/?wsdl';
        }
        $destination = Yii::getAlias('@app/modules/postal/sender');
        $namespace = 'app\\modules\\postal\\sender';

        $options = GeneratorOptions::instance();
        $options
            ->setOrigin($wsdl)
            ->setDestination($destination)
            ->setNamespace($namespace)
            ->setGenerateTutorialFile(false)
            ->setStandalone(false)
            ->setNamespaceDictatesDirectories(true);

        $generator = new Generator($options);
        $generator->generatePackage();
        Console::output('Success generate.');
    }
}
