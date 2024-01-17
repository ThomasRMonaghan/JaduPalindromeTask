<?php 

declare(strict_types=1);

namespace App\Service;

class Checker
{
    public function isPalindrome(string $word) : bool
    {
        $sanitizedWord = $this->sanitizeString($word);

        return $sanitizedWord === strrev($sanitizedWord);
    }
    
    public function isAnagram(string $word, string $comparison) : bool
    {
        $sanitizedWord = $this->sanitizeString($word);
        $sanitizedComparison = $this->sanatizeString($comparison);

        sort($sanitizedWord);
        sort($sanitizedComparison);

        return $sanitizedWord == $sanitizedComparison;
    }

    public function isPangram(string $phrase) : bool
    {
        $sanitizedPhrase = $this->sanitizeString($phrase);
        $alphabet = range('a', 'z');

        foreach($alphabet as $letter) {
            if (strpos($sanitizedPhrase, $letter) === false) {
                return false;
            }
        }

        return true;
    }

    private function sanitizeString(String $string): string
    {
        return preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));
    }
}