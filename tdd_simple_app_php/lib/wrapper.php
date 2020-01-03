<?php
class Wrapper
{
    public function wrap($text, $lineLength)
    {
        $text = trim($text);
        if (strlen($text) <= $lineLength) {
            return $text;
        }

        if (strpos(substr($text, 0, $lineLength), ' ') != 0) {
            return substr($text, 0, strpos($text, ' ')) . "\n" . $this->wrap(substr($text, strpos($text, ' ') + 1), $lineLength);
        }
        return substr($text, 0, $lineLength) . "\n" . $this->wrap(substr($text, $lineLength), $lineLength);
    }
}
