<?php

$name = 'me';

//echo 'It's Sunday. Hello ' . $name . PHP_EOL;
echo "It's Sunday. Hello " . $name . PHP_EOL;
echo "It's Sunday. Hello $name" . PHP_EOL;
echo "It's \"Sunday\". Hello $name" . PHP_EOL;
echo "It's \"Sunday\".\t Hello $name" . PHP_EOL;


// $text = <<<'EOT' // nowdoc
// $text = <<<"EOT" // heredoc
  $text = <<<EOT
  hello! $name
    this is looooong
  text!
  
  EOT;

echo $text;




?>