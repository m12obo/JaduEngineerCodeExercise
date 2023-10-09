<?php 

use \PHPUnit\Framework\TestCase;
use App\Checker;

class CheckerClassTest extends TestCase
{
    protected $checker;

    protected function Setup() : void
    {
        $this->checker = new Checker();
    }

    public function tearDown() : void
    {
        $word = [];
        $words = [];
        $phrase = [];
        $phrases = [];
    }

    /** @test **/
    public function is_word_a_palindrome()
    {
        //setup
        $words = array("anna", "racecar", "wontloversrevoltnow", "amanaplanacanalpanama") ;

        //DoSomething
        foreach ($words as $word) 
        {
            $result = $this->checker->isPalindrome($word);

            //Make assertions
            $this->assertEquals($result, true);
        }
    }

    /** @test **/
    public function is_word_not_a_palindrome()
    {
        //setup
        $words = array("Bark", "cat", "wont lovers revolt now", "Anna") ;

        //DoSomething
        foreach ($words as $word) 
        {
            $result = $this->checker->isPalindrome($word);

            //Make assertions
            $this->assertEquals($result, false);
        }
    }

    /** @test **/
    public function is_word_an_anagram()
    {
        
        //setup
        $words = array("coalface" => "cacao elf", "cat" => "act", "lampshade" => "headlamps", "Dormitory" => "Dirty room") ;
        

        //DoSomething
        foreach ($words as $word=>$comparison) 
        {
            $result = $this->checker->isAnagram($word, $comparison);

            //Make assertions
            $this->assertEquals($result, true);
        }
    }

    /** @test **/
    public function is_word_not_an_anagram()
    {
        
        //setup
        $words = array("coalface" => "dark elf", "cat" => "dog", "lampshade" => "light cover", "Dormitory" => "students room") ;
        

        //DoSomething
        foreach ($words as $word=>$comparison) 
        {
            $result = $this->checker->isAnagram($word, $comparison);

            //Make assertions
            $this->assertEquals($result, false);
        }
    }

    /** @test **/
    public function is_phrase_a_pangram()
    {
        //setup
        $phrases = array
        (
            "The quick brown fox jumps over the lazy dog",
            "The quick onyx goblin jumps over the lazy dwarf",
            "yes Beth, I quick solve exotic pangram word puzzles in a jiff",
            "Pack my box with five dozen liquor jugs",
        ) ;
        

        //DoSomething
        foreach ($phrases as $phrase) 
        {
            $result = $this->checker->isPangram($phrase);

            //Make assertions
            $this->assertEquals($result, true);
        }
    }

    /** @test **/
    public function is_phrase_not_a_pangram()
    {
        //setup
        $phrases = array
        (
            "The British Broadcasting Corporation (BBC) is a British public service broadcaster",
            "The slow ogre jumps over the lazy knight",
            "These are not the droids you are looking for",
            "Its over Anakin I have the high ground",
        ) ;
        

        //DoSomething
        foreach ($phrases as $phrase) 
        {
            $result = $this->checker->isPangram($phrase);

            //Make assertions
            $this->assertEquals($result, false);
        }
    }

}