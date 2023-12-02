# Stored Cold Seed - TDD Kata

## Context

A backup Bitcoin seed wallet, often referred to as a seed phrase or mnemonic phrase, is a crucial component of cryptocurrency wallets, particularly those that follow the Hierarchical Deterministic (HD) wallet standard, such as BIP-39 ([Bitcoin Improvement Proposal 39](https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki)). This seed phrase is a sequence of [words](https://github.com/bitcoin/bips/blob/master/bip-0039/english.txt) (usually 12, 18, or 24 words) that serves as a backup and recovery mechanism for your cryptocurrency wallet.

When you create a new wallet, you are provided with a seed phrase. Losing access to the seed phrase can result in permanent loss of funds, as it's the only means of recovering your wallet and associated private keys.

## Goal

In this kata, instead of storing words, we are going to store the position of the word in the BIP 39 list in binary:

```
  2048 | 1024 | 512 | 256 | 128 | 64 | 32 | 16 | 8 | 4 | 2 | 1
1)   0      0     1     0     0    1    0    1   1   0   1   0 = 001001011010 = 602
2)   0      1     0     0     0    0    1    0   1   0   0   1 = 010000101001 = 1065
3) ...
^-- word
```

> Example above: the first word will be in position 602, the second position 1065, etc.

### 1st iteration

Create a function that given a sequence of 1 and 0, which represents the binary number of the position of the word, and the result will be the word associated to that position.

```test 
readWord("001001011010") == "enroll"
readWord("010000101001") == "lunar"
```

### 2nd iteration

Allow receiving an array of binary numbers, and the result will be the array with those words.


```test 
readWords(["001001011010", "010000101001"]) == "enroll lunar"
```

---

<p align="center">
  <img alt="Tinyseed.io" src="stored-cold-seed-kata-img.jpg">
</p>
