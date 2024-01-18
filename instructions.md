Follow the steps to set up local application:
-pull the git repo
-fill out the ENV details
-start a local Symfony server by running 'symfony server:start' in the command line where the project is stored

The following routes will allow access to the controller actions:

check_palindrome:
    path: /check_palindrome/{input}
    controller: App\Controller\MainController::checkPalindrome

check_anagram:
    path: /check_anagram/{word}/{comparison}
    controller: App\Controller\MainController::checkAnagram

check_pangram:
    path: /check_pangram/{phrase}
    controller: App\Controller\MainController::checkPangram

