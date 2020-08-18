<?php

namespace App;

class ProductLogger implements IEntityLogger
{

    /**
     * This method count requests to product.
     *
     * @param string $id
     */
    public function log(string $id): void
    {
        $file = 'counter.txt';

        if (!is_file($file)) {
            $contents = "$id=1";           // Some simple example content.
            file_put_contents($file, $contents);     // Save our content to the file.
            return;
        }
        $data = '';
        $myFile = fopen($file, 'rb');
        while (!feof($myFile)) {
            $line = fgets($myFile);
            $lineA = explode("=", $line);
            if ($lineA[0] === $id) {
                ++$lineA[1];
            }
            $data .= $lineA[0] . '=' . $lineA[1] . "\n";
        }

        fclose($myFile);

        file_put_contents($file, $data);
    }
}