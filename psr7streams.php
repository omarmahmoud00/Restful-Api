  <?php

  require 'vendor\autoload.php'; 
  use GuzzleHttp\Psr7\Utils;


      $stream = Utils::streamFor('hi it is my first stream');

      echo  $stream .':';
      echo  $stream->getSize() .':';
      echo  $stream->isReadable() .':';
      echo  $stream->isWritable() .':';
      echo  $stream->isSeekable() .':';


      $stream->write(' it is writable');
      $stream->rewind();  
      echo $stream->read(10);
      echo $stream->getContents().':';
      echo $stream->eof();
      
  ?>