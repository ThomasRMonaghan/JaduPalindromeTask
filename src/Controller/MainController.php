<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\Checker;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController 
{
    private $checker;

    public function __construct(Checker $checker)
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
     * @Route("/check_anagram/{word}/{comparison}", name="check_anagram")
     */
    public function checkAnagram(string $word, string $comparison): Response
    {
        $isAnagram = $this->checker->isAnagram($word, $comparison);
        return new Response($isAnagram ? 'true' : 'false');
    }

    /**
     * @Route("/check_pangram/{phrase}", name="check_pangram")
     */
    public function checkPangram(string $phrase): Response
    {
        $isPangram = $this->checker->isPangram($phrase);
        return new Response($isPangram ? 'true' : 'false');
    }
}
