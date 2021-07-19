<?php

/**
 * Definition and Usage:
 *    Passwords are generally not stored in cleartext, but rather hashed.
 *    Its purpose is to make pre-computation based attacks unhelpful.
 *    A salt is simply added to make a password hash output unique even for users adopting common passwords.
 *
 */

// Example 1:
$appSecret = '123@pass';
$passwords = md5('thisIsSecretUserPassword' . $appSecret);
$appCipher = base64_encode($appSecret . $passwords);

echo $appCipher;

# Output => MTIzQHBhc3MyZTAwOTk2MTE1M2Y0YmY5NGQ2YjY0OTgyMjAzNmJiZQ==