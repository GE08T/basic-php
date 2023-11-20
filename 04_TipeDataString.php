<?php 

echo 'Hallo ini String ';
echo 'Ini tidak terhingga ';
echo "\n";  

echo "Hallo ini String ";
echo "Ini\t tidak\t \nterhingga ";
echo "\n";  

echo <<<GAP
dalam membuat string
ini adalah contoh 
dari heredoc 
GAP;

echo <<<'GAP'
dalam membuat string
ini adalah contoh 
dari nowdoc 
GAP;