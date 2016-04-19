<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:38
 */

namespace oop_Learn\Controllers
{
    use DOMXPath;

    class FrontPageController extends AbstractController
    {
        public function getBody()
        {
            $doc = $this->loadDOM('/var/www/oop_Learn/data/Pages/index.html');
            $xpath = new DOMXPath($doc);


            //$body = $doc->getElementsByTagName('body')->item(0);
            //$link = $doc->createElement('a', 'Google Link');
            //$link->setAttribute('href','http://www.google.ch');
            //$newLink = $body->appendChild($link);
            //$div = $doc->createElement('div');

            //$xpath->registerNamespace('html', "http://www.w3.org/1999/xhtml");

            //$test2 = 'test2';

            //$ad_test = $xpath->query('//html:div[@class="navbar"]')->item(0)->nodeValue='Link';
            //$ad_test2 = $xpath->query('//html:div[@class="navbar"]')->item(0)->nodeValue=$test2;
            //$ad_test3 = $xpath->query('//html:div[@class="navbar"]')->item(0)->appendChild($div);


            return $doc->saveXML();

        }
    }
}

