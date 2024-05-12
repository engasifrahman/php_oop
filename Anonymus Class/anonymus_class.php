<?php

    /**
     * Anonymous classes in PHP allow you to create a class without having to define it first. 
     * This can be useful for creating one-off classes or 
     * for creating classes that are only needed for a short period of time.
     */

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

   $app->getLogger()->log("This is my first log message");