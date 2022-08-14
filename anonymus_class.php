<?php

    /**
     * php function arguments link
     * https://www.php.net/manual/en/functions.arguments.php
     */

   interface Logger {
      public function log(string $msg);
   }

   class Application {
      private $logger;
      public function log(string $msg)
      {

      }
      public function getLogger(): self {
         return $this->logger;
      }

      public function setLogger(self $logger) {
         $this->logger = $logger;
      }  
   }

   $app = new Application;
   $app->setLogger(new class extends Application {
      public function log(string $msg) {
         print($msg);
      }
   });

   $app->getLogger()->log("My first Log Message");
?>