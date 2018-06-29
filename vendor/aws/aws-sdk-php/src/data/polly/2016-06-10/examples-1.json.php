<?php
// This file was auto-generated from sdk-root/src/data/polly/2016-06-10/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'DeleteLexicon' => [ [ 'input' => [ 'Name' => 'example', ], 'output' => [], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'Deletes a specified pronunciation lexicon stored in an AWS Region.', 'id' => 'to-delete-a-lexicon-1481922498332', 'title' => 'To delete a lexicon', ], ], 'DescribeVoices' => [ [ 'input' => [ 'LanguageCode' => 'en-GB', ], 'output' => [ 'Voices' => [ [ 'Gender' => 'Female', 'Id' => 'Emma', 'LanguageCode' => 'en-GB', 'LanguageName' => 'British English', 'Name' => 'Emma', ], [ 'Gender' => 'Male', 'Id' => 'Brian', 'LanguageCode' => 'en-GB', 'LanguageName' => 'British English', 'Name' => 'Brian', ], [ 'Gender' => 'Female', 'Id' => 'Amy', 'LanguageCode' => 'en-GB', 'LanguageName' => 'British English', 'Name' => 'Amy', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'Returns the list of voices that are available for use when requesting speech synthesis. Displayed languages are those within the specified language code. If no language code is specified, voices for all available languages are displayed.', 'id' => 'to-describe-available-voices-1482180557753', 'title' => 'To describe available voices', ], ], 'GetLexicon' => [ [ 'input' => [ 'Name' => '', ], 'output' => [ 'Lexicon' => [ 'Content' => '<?xml version="1.0" encoding="UTF-8"?><lexicon version="1.0" xmlns="http://www.w3.org/2005/01/pronunciation-lexicon" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.w3.org/2005/01/pronunciation-lexicon http://www.w3.org/TR/2007/CR-pronunciation-lexicon-20071212/pls.xsd" alphabet="ipa" xml:lang="en-US"> <lexeme> <grapheme>W3C</grapheme> <alias>World Wide Web Consortium</alias> </lexeme></lexicon>', 'Name' => 'example', ], 'LexiconAttributes' => [ 'Alphabet' => 'ipa', 'LanguageCode' => 'en-US', 'LastModified' => 1478542980.1170001, 'LexemesCount' => 1, 'LexiconArn' => 'arn:aws:polly:us-east-1:123456789012:lexicon/example', 'Size' => 503, ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'Returns the content of the specified pronunciation lexicon stored in an AWS Region.', 'id' => 'to-retrieve-a-lexicon-1481912870836', 'title' => 'To retrieve a lexicon', ], ], 'ListLexicons' => [ [ 'input' => [], 'output' => [ 'Lexicons' => [ [ 'Attributes' => [ 'Alphabet' => 'ipa', 'LanguageCode' => 'en-US', 'LastModified' => 1478542980.1170001, 'LexemesCount' => 1, 'LexiconArn' => 'arn:aws:polly:us-east-1:123456789012:lexicon/example', 'Size' => 503, ], 'Name' => 'example', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'Returns a list of pronunciation lexicons stored in an AWS Region.', 'id' => 'to-list-all-lexicons-in-a-region-1481842106487', 'title' => 'To list all lexicons in a region', ], ], 'PutLexicon' => [ [ 'input' => [ 'Content' => 'file://example.pls', 'Name' => 'W3C', ], 'output' => [], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'Stores a pronunciation lexicon in an AWS Region.', 'id' => 'to-save-a-lexicon-1482272584088', 'title' => 'To save a lexicon', ], ], 'SynthesizeSpeech' => [ [ 'input' => [ 'LexiconNames' => [ 'example', ], 'OutputFormat' => 'mp3', 'SampleRate' => '8000', 'Text' => 'All Gaul is divided into three parts', 'TextType' => 'text', 'VoiceId' => 'Joanna', ], 'output' => [ 'AudioStream' => 'TEXT', 'ContentType' => 'audio/mpeg', 'RequestCharacters' => 37, ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'Synthesizes plain text or SSML into a file of human-like speech.', 'id' => 'to-synthesize-speech-1482186064046', 'title' => 'To synthesize speech', ], ], ],];