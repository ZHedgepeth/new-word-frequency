# _Word Frequency_

#### _Web application that tests the frequency of a given word. 09.16.16_

#### By _**Zachary Hedgepeth**_

## Description
_The user will be prompted to enter a word and a string of words. Word Frequency will determine how many times if any, the word in the first form was used in the second form._

## Setup
_If you would like to open this project on your own computer continue with the steps below:_

* 1) In your terminal, open or create a directory where you would like Word Frequency.

* 2) In your terminal, enter the following command: git clone https://github.com/ZHedgepeth/new-word-frequency.git

* 3) In your terminal, navigate to the new-word-frequency directory and execute this command: composer install

* 4) Now you will be able to do what you would like to this cloned repository, to view this repository continue to the next steps.

* 5) In your terminal, navigate to the web directory inside of the new-word-frequency directory and execute this command: php -S localhost:8000

* 6) Open up the browser of your choice and type the following url: http://localhost:8000/

## Specs
* 1). Word including one letter and string including one letter the same as word.
  + example input: "a", "a"
  + example output: 1

* 2). Word including one letter and string including one letter not the same as word.
  + example input: "a", "b"
  + example output: 0

* 3). Word including one letter and string including one letter not the same as word and one letter that is the same as word.
  + example input: "a", "a b"
  + example output: 1

* 4). Word including one letter and string including one letter.
  + example input: "a", "bat"
  + example output: 0

* 5). Word is one word and string is one word not matching word.
  + example input: "a", "bat"
  + example output: 0

* 6). Word is one word and string is multiple words including word.
  + example input: "ant", "the one ant is smaller than another ant"
  + example output: 2

* 7). Word is one word and string is multiple words not including word.
  + example input: "ant", "the one bug is smaller than another bug"
  + example output: 0

## Known Bugs
_There are no known bugs at this time_

## Support and Contact
_You can email me for technical support at zhedgepeth1124@gmail.com_

## Technologies used

* Silex 2.0
* Twig 1.0
* Phpunit 5.5
* Bootstrap - cdn

## License

_MIT License_

_Copyright (c) **Zachary Hedgepeth**_
