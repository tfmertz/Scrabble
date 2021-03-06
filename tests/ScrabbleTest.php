<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        /*
        input: "A" (string)
        output: 1 (number)
        Spec: Take a single letter "A" as a string and output the number 1
        */
        function test_getScore_oneLetter()
        {
            $test_Scrabble = new Scrabble();
            $input = 'A';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(1, $result);

        }

        /*
        input: "AE" (string)
        output: 2 (number)
        Spec: Take a two letters with the value of 1 in a string "AE" and output the number 2
        */
        function test_getScore_twoLetterSameScore()
        {
            $test_Scrabble = new Scrabble();
            $input = 'AE';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(2, $result);
        }

        /*
        input: "D" (string)
        output: 2 (number)
        Spec: Take a single letter "D" with a value of 2 and output the number 2
        */
        function test_getScore_oneLetterScoreTwo()
        {
            $test_Scrabble = new Scrabble();
            $input = 'D';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(2, $result);
        }

        /*
        input: "IG" (str)
        output: 3 (num)
        Spec: Take a two letter string "IG" of different scores and give us the number 3
        */
        function test_getScore_twoLetterScoreOneTwo()
        {
            $test_Scrabble = new Scrabble();
            $input = 'IG';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(3, $result);
        }

        /*
        input: "B" (string)
        output: 3 (num)
        Spec: Take a one letter string "B" and output the number 3
        */
        function test_getScore_oneLetterScoreThree()
        {
            $test_Scrabble = new Scrabble();
            $input = 'B';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(3, $result);
        }


        /*
        input: "EC" (string)
        output: 4 (number)
        Spec: Take a two letter string of "EC" and return number 4
        */
        function test_getScore_twoLetterScoreFour()
        {
            $test_Scrabble = new Scrabble();
            $input = 'EC';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(4, $result);
        }

        /*
        input: "MG" (string)
        output: 5 (number)
        Spec: Take a two letter string of "MG" and return the number 5
        */
        function test_getScore_twoLetterScoreFive1()
        {
            $test_Scrabble = new Scrabble();
            $input = 'MG';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(5, $result);
        }

        /*
        input: "ODP" (string)
        output: 6 (number)
        Spec: Take a three letter string of "ADB" and return the number 6
        */
        function test_getScore_threeLetterScoreSix()
        {
            $test_Scrabble = new Scrabble();
            $input = 'ODP';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(6, $result);
        }

        /*
        input: "F" (string)
        output: 4 (number)
        Spec: Take a single letter "F" and give us the number 4
        */
        function test_getScore_oneLetterScoreFour()
        {
            $test_Scrabble = new Scrabble();
            $input = 'F';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals( 4, $result);
        }

        /*
        input: "UH"
        output: 5
        Spec: Take a two letter string "UH" and give us the number 5
        */
        function test_getScore_twoLetterScoreFive()
        {
            $test_Scrabble = new Scrabble();
            $input = 'UH';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(5, $result);
        }

        /*
        input: "K"
        output: 5
        Spec: Take a single letter string "K" and give us the number 5
        */
        function test_getScore_oneLetterScoreFive()
        {
            $test_Scrabble = new Scrabble();
            $input = 'K';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(5, $result);
        }

        /*
        input: "J"
        output: 8
        Spec: Take a single letter "J" as a string, and give us the number 8
        */
        function test_getScore_oneLetterScoreEight()
        {
            $test_Scrabble = new Scrabble();
            $input = 'J';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(8, $result);
        }

        /*
        input: "Q"
        output: 10
        Spec: Take a single letter "Q" as a string, and give us the number 10
        */
        function test_getScore_oneLetterScore10()
        {
            $test_Scrabble = new Scrabble();
            $input = 'Q';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(10, $result);
        }

        /*
        input: "LBDV"
        output: 10
        Spec: Take a four letter string "LBDV" and give us the number 10
        */
        function test_getScore_fourLetterScoreTen()
        {
            $test_Scrabble = new Scrabble();
            $input = 'LBDV';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(10, $result);
        }

        /*
        input: "KWBDN"
        output: 15
        Spec: Take a five letter string "KWBDN" and give us the number 15
        */
        function test_getScore_fiveLetterScoreFifteen()
        {
            $test_Scrabble = new Scrabble();
            $input = 'KWBDN';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(15, $result);
        }

        /*
        input: "XKYBDR"
        output: 23
        Spec: Take letters with scores of 8, 5, 4, 3, 2, 1 and output the number 23
        */
        function test_getScore_fiveLetterScoreTwentyThree()
        {
            $test_Scrabble = new Scrabble();
            $input = 'XKYBDR';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(23, $result);
        }

        /*
        input: "ZJKFBDS"
        output: 33
        Spec: Take letters with scores of 10, 8, 5, 4, 3, 2, 1 and output the number 33
        */
        function test_getScore_sevenLetterScoreTwentyThree()
        {
            $test_Scrabble = new Scrabble();
            $input = 'ZJKFBDS';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(33, $result);
        }
        /*
        input: "ZJKFBDT"
        output: 33
        Spec: Take letter with scores of 10, 8, 5, 4, 3, 2, 1 but entered in reverse and output the number 33
        */
        function test_getScore_sevenLetterScoreThirtyThreeReverse()
        {
            $test_Scrabble = new Scrabble();
            $input = 'ZJKFBDT';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(33, $result);
        }

        /*
        input: "aDbFkJQ"
        output: 33
        Spec: Take case insensitive letters with scores of 10, 8, 5, 4, 3, 2, 1 and output 33
        */
        function test_getScore_lowercase()
        {
            $test_Scrabble = new Scrabble();
            $input = 'aDbFkJQ';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(33, $result);
        }

        /*
        input: "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
        output: 174
        Spec: Take take all cases of letters and output 174
        */
        function test_getScore_allLetters()
        {
            $test_Scrabble = new Scrabble();
            $input = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(174, $result);
        }

        /*
        input: "11cat.!"
        output: -1
        Spec: Take take all cases of letters and output 174
        */
        function test_getScore_invalidNumbers()
        {
            $test_Scrabble = new Scrabble();
            $input = '11cat.!';

            $result = $test_Scrabble->getScore($input);

            $this->assertEquals(-1, $result);
        }
    }




 ?>
