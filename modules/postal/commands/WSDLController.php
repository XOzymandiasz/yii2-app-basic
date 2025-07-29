<?php

namespace app\modules\postal\commands;

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;
use Yii;
use yii\console\Controller;

class WSDLController extends Controller
{

    public function actionGenerate(): void
    {
        $wsdl = 'https://en-testwebapi.poczta-polska.pl/websrv/?wsdl';
        $destination = Yii::getAlias('@app/modules/postal/sender');
        $namespace = 'app\\modules\\postal\\sender';

        $options = GeneratorOptions::instance();
        $options
            ->setOrigin($wsdl)
            ->setDestination($destination)
            ->setNamespace($namespace)
            ->setCategory('cat')
            ->setComposerName('poczta-polska-sender')
            ->setGenerateTutorialFile(false)
            ->setStandalone(false)
            ->setNamespaceDictatesDirectories(true);

        $generator = new Generator($options);
        $generator->generatePackage();

        echo "sukces\n";
    }
}
