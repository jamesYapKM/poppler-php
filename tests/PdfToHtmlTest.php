<?php
/**
 * Poppler-PHP
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/14/2016
 * Time:    4:46 AM
 **/

use jamesYapKM\PopplerPhp\Config;
use jamesYapKM\PopplerPhp\Exceptions\PopplerPhpException;
use jamesYapKM\PopplerPhp\PdfToHtml;
use \PHPUnit\Framework\TestCase;

/**
 * Class PdfToHtmlTest
 */
class PdfToHtmlTest extends TestCase
{
    /**
     *
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @throws PopplerPhpException
     */
    public function testGenerateMethod()
    {
        Config::setOutputDirectory(Config::getOutputDirectory(true), true);
        $DS = DIRECTORY_SEPARATOR;
        $file = __DIR__.$DS."sources{$DS}test1.pdf";
        $pdfToHtml = new PdfToHtml($file);

        //$cairo->oddPagesOnly();
        //$cairo->generatePNG();

        //$cairo->startFromPage(1)->stopAtPage(1);
        //$cairo->generateSVG();

        $pdfToHtml->startFromPage(1)->stopAtPage(5);
        $pdfToHtml->generateSingleDocument();
        $pdfToHtml->noFrames();
        $pdfToHtml->oddPagesOnly();
        print_r($pdfToHtml->generate());
    }

}
