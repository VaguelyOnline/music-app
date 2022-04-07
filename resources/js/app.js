require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.DICTIONARY = null;

function loadText() {
    fetch('/api/text')
        .then(response => response.json())
        .then(data => window.DICTIONARY = parseText(data));
}

function getWords(text) {
    return text.split(' ');
}

function cleanWords(words) {
    for(let i = 0; i < words.length; i++) {
        words[i] = cleanWord(words[i]);
    }

    return words;

    // return words.map(word => cleanWord(word));
}

function cleanWord(word) {
    return word.toLowerCase().replace(/[^a-z]/gi, '');
}

function buildDictionary(words) {
    let dictionary = {};

    words.forEach(word => {
        let count = dictionary[word] || 0;
        dictionary[word] = ++count;
    });

    return {
        words: dictionary,
        find(word) {
            return this.words[word] || 0;
        }
    };
}

function parseText(data) {
   let words = getWords(data.text);
   let cleanedWords = cleanWords(words);
   return buildDictionary(cleanedWords);
}

loadText();

