# _Word Frequency_

#### _Web application that tests the frequency of a given word. 09.16.16_

#### By _**Zachary Hedgepeth**_

## Description
_The user will be prompted to enter a word and a string of words. Word Frequency will determine how many times if any, the word in the first form was used in the second form._

## Specs
* 1). Word including one letter and string including one letter the same as word.
  + example input: [a], [a]
  + example output: 1

* 2). Word including one letter and string including one letter not the same as word.
  + example input: [a], [b]
  + example output: 0

* 3). Word including one letter and string including one letter not the same as word and one letter that is the same as word.
  + example input: [a], [a, b]
  + example output: 1

* 4). Word including one letter and string including one letter.
  + example input: [a], [bat]
  + example output: 0
