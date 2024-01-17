<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\Checker;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    private $checker;

    public function __construct(checker $checker)
    {
        $this->checker = $checker;
    }

    /**
    * @Route("/check_palindrome/{input}", name="check_palindrome")
    */
    public function checkPalindrome(string $input): Response
    {
        $isPalindrome = $this->checker->isPalindrome($input);
        return new Response($isPalindrome ? 'true' : 'false');
    }

    /**
    * @Route("/check_anagram/{input}", name="check_anagram")
    */
    public function checkAnagram(string $word, string $comparison): Response
    {
        $isAnagram = $this->checker->isAnagram($word, $comparison);
        return new Response($isAnagram ? 'true' : 'false');
    }

    /**
    * @Route("/check_pangram/{input}", name="check_pangram")
    */
    public function checkPangram(string $phrase): Response
    {
        $isAnagram = $this->checker->isAnagram($phrase);
        return new Response($isAnagram ? 'true' : 'false');
    }
}