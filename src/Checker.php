<?php declare(strict_types=1);

namespace App;

/**
 * Pangrams, anagrams and palindromes
 * 
 * Implement each of the functions of the Checker class. 
 * Aim to spend about 10 minutes on each function. 
 */
class Checker
{
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters 
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome(string $word) : bool
    {
        /*
        * Assumptions made that upper and lowercase letters are classed as different characters 
        * so Anna would return false and anna would return true.
        */

        //set the beginning and end values
        $beginning = 0;
        $end = strlen($word) - 1;

        //while we are not in the middle 
        while ($beginning < $end)
        {
            //check to see if the character at the beginning position equals the character at the end position
            if ($word[$beginning] != $word[$end])
                return false;

            //if it does move the pointers closer 
            $beginning++;
            $end--;
        }
        return true;
    }
    
    /**
     * An anagram is the result of rearranging the letters of a word or phrase 
     * to produce a new word or phrase, using all the original letters 
     * exactly once.
     * 
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public function isAnagram(string $word, string $comparison) : bool
    {
        //remove spaces
        $word = str_replace(' ', '', $word);
        $comparison = str_replace(' ', '', $comparison);

        // if length of string not equal return false
        if (strlen($word) != strlen($comparison))
            return false;

        //if both strings are equal return true
        if ($word == $comparison)
            return true;

        //create arrays from the strings
        $wordArray = str_split($word);
        $comparisonArray = str_split($comparison);

        //create associated arrays using integer values as the keys
        $wordCounter = array_count_values($wordArray);
        $comparisonCounter = array_count_values($comparisonArray);

        //loop through one of the associated arrays as we know the sizes are equal
        foreach($wordCounter as $key=>$character)
        {
            //check the key exists in the other hashmap
            if (array_key_exists($key, $comparisonCounter))
            {
                //compare the value at the key position to the character if not equal return false
                if ($comparisonCounter[$key] != $character)
                    return false;
            }
            else
                return false;
        }

        //if we ge here then it is an anagram so return true.
        return true;

        /* could sort the arrays and compare them too
        $wordArray = sort($wordArray);
        $comparisonArray = sort($comparisonArray);

        if ($wordArray == $comparisonArray)
            return true;

        return false;
        */ 
    }

    /**
     * A Pangram for a given alphabet is a sentence using every letter of the 
     * alphabet at least once. 
     * 
     * @param string $phrase
     * @return bool
     */    
    public function isPangram(string $phrase) : bool
    {
        define("NUMBER_OF_LETTER_IN_THE_ALPHABET",  26);
        
        //remove the spaces from the string
        $phrase = str_replace(' ', '', $phrase);

        // set the number of characters counted to 0
        $characterCounter = 0;

        //create an array with all the letters in the alphabet
        $alphabetArray = range('a','z');

        //create an associated array of characters and keys and change all case to lower case
        $phraseArray = array_count_values(str_split(strtoLower($phrase)));

        //loop through the alphabet array
        foreach($alphabetArray as $key=>$character)
        {
            //check if the character is tin the phrase if so add 1 to the character counter
            if (array_key_exists($character, $phraseArray))
                $characterCounter++;
        }

        //if the character counter is 26 then each letter is represented at least once
        if ($characterCounter == NUMBER_OF_LETTER_IN_THE_ALPHABET)
            return true;

        return false;

    }
}