# Stored Cold Seed - TDD Kata

## Context

A backup Bitcoin seed wallet, often referred to as a seed phrase or mnemonic phrase, is a crucial component of cryptocurrency wallets, particularly those that follow the Hierarchical Deterministic (HD) wallet standard, such as BIP-39 ([Bitcoin Improvement Proposal 39](https://github.com/bitcoin/bips/blob/master/bip-0039.mediawiki)). This seed phrase is a sequence of [words](https://github.com/bitcoin/bips/blob/master/bip-0039/english.txt) (usually 12, 18, or 24 words) that serves as a backup and recovery mechanism for your cryptocurrency wallet.

When you create a new wallet, you are provided with a seed phrase. Losing access to the seed phrase can result in permanent loss of funds, as it's the only means of recovering your wallet and associated private keys.

## Goal

In this kata, instead of storing words, we are going to store the position in binary of the word in the BIP 39 list:

```php
n | binary       | decimal 
1 | 001001011010 | 602
2 | 010000101001 | 1065
3 | ...          | ...
```

Example above:
- the first word will be in position `602` = "enroll" 
- the second is in the position `1065` = "lunar"
- etc

### 1st iteration

Create a function that given a binary number, the result will be the word associated to that position.

```php
# Proposal code to start...
final class StoredColdSeed 
{
  public function readWord(int $binary): string
  {
    // ...
  }
}
```

```php 
readWord(0b000000000001) == "abandon"
readWord(0b000000000010) == "ability"
readWord(0b000000000011) == "able"
...
readWord(0b001001011010) == "enroll"
readWord(0b010000101001) == "lunar"
```

### 2nd iteration

Allow receiving an array of binary numbers, and the result will be the array with those words.

```php
# example
readWords([0b001001011010, 0b010000101001]) == "enroll lunar"
```

---

<p align="center">
  <img alt="Tinyseed.io" src="stored-cold-seed-kata-img.jpg">
</p>
