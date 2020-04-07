<?php

require 'vendor/autoload.php';

use ChainResponsibilities\Alarm;
use ChainResponsibilities\HomeStatus;
use ChainResponsibilities\Lights;
use ChainResponsibilities\Locks;
use Strategy\LogToDatabase;
use Strategy\LogToXService;
use TemplatePattern\TurkeySub;
use TemplatePattern\VegiSub;
use AdapterPattern\Book;
use AdapterPattern\BookInterface;
use AdapterPattern\Kindle;
use AdapterPattern\KindleAdapter;
use DecoratorPattern\AbstractFileDecorator;
use DecoratorPattern\File;
use DecoratorPattern\FileSystemDecorator;
use DecoratorPattern\UrlFileDecorator;
use Strategy\App;
use Strategy\LogToFile;

/**
 *
 * Code start for Adapter pattern
 *
 *
 */


// class Person{
//
//     public function read(BookInterface $book){
//         $book->open();
//         $book->turnPage();
//     }
// }
//
// $person = new Person ;
// var_dump($person);
// //implementing kindel with Adapter
// $kindle = new Kindle;
// $person->read(new KindleAdapter($kindle));
//
// //implementing book
// $book = new Book;
// $person->read($book);

/**
 * End Adadpter Pattern
 */


/**
 *
 *Start Template method pattern
 */

// $turkeySub = new TurkeySub();
// $turkeySub->make();
//
// $vegiSub = new VegiSub();
// $vegiSub->make();

/**
 *
 * Start Strategy Pattern
 * Procedure
 *
 */

//$app = new App();
//$app->log(' - data');
//$app->log(' - data', new LogToDatabase());
//$app->log(' - data', new LogToXService());

/**
 * End Strategy
 *
 */

/**
 * Start Chain of responsibility
 */

//$locks = new Locks;
//$lights = new Lights;
//$alarms = new Alarm;
//
//$locks->succeedWith($lights);
//$lights->succeedWith($alarms);
//$locks->check(new HomeStatus);
/**
 * End Chain of responsibility
 */

/**
 *Start Decorator Pattern
 */
//$file = new File('book_php', 'file/name/book');
//echo $file->getPath();
//
//
////on file
//$inFile = new AbstractFileDecorator($file);
//echo  $inFile->getPath();
//
////or url
//$inUrl = new UrlFileDecorator($file);
//echo $inUrl->getPath();

