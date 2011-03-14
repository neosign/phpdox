<?php // this is an autogenerated file - do not edit (created Mon, 14 Mar 2011 04:22:01 +0100)
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'theseer\\phpdox\\application' => '/application.php',
            'theseer\\phpdox\\builder' => '/builder.php',
            'theseer\\phpdox\\classbuilder' => '/classbuilder.php',
            'theseer\\phpdox\\cli' => '/cli.php',
            'theseer\\phpdox\\cliexception' => '/cli.php',
            'theseer\\phpdox\\collector' => '/collector.php',
            'theseer\\phpdox\\docblock\\docblock' => '/docblock/docblock.php',
            'theseer\\phpdox\\docblock\\genericcontext' => '/docblock/genericcontext.php',
            'theseer\\phpdox\\docblock\\genericelement' => '/docblock/genericelement.php',
            'theseer\\phpdox\\docblock\\parser' => '/docblockparser.php',
            'theseer\\phpdox\\generator' => '/generator.php',
            'theseer\\phpdox\\generatorexception' => '/generator.php',
            'theseer\\phpdox\\genericbackend' => '/backend/genericbackend.php',
            'theseer\\phpdox\\htmlbuilder' => '/backend/htmlbuilder.php',
            'theseer\\phpdox\\progresslogger' => '/logger/progresslogger.php',
            'theseer\\phpdox\\progressloggerexception' => '/logger/progresslogger.php',
            'theseer\\phpdox\\shellprogresslogger' => '/logger/shellprogresslogger.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
