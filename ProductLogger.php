<?php

namespace App;

/**
 * Class ProductLogger allows us to log product activity.
 * @package App
 */
class ProductLogger implements IEntityLogger
{
    private const COUNTER_PATH = 'counter.txt'; // For instance let it be in the project folder.

    /**
     * This method count requests to product and store it into the file.
     * I've decided to put all in one method for simplification.
     *
     * @param string $id
     */
    public function log(string $id): void
    {
        $content = explode("\n", file_get_contents(self::COUNTER_PATH));
        $match = false;

        foreach ($content as $key => $line) {
            if (empty($line)) {
                unset($content[$key]);
                continue;
            }
            $lineKeyValue = explode('=', $line);
            if ($id === $lineKeyValue[0]) {
                $match = true;
                ++$lineKeyValue[1];
                $content[$key] = $lineKeyValue[0] . '=' . $lineKeyValue[1];
                continue;
            }
        }

        if (!$match) {
            $content[] = $id . "=1\n";
        }

        file_put_contents(self::COUNTER_PATH, implode("\n", $content));
    }
}