<?php
/**
 * PHP String Manipulation Operations
 * Demonstrates: strlen(), strrev(), substr() functions
 */

// Sample strings for demonstration
$sampleString = "Hello World";
$email = "student@university.com";
$sentence = "PHP is a powerful server-side language";

echo "=== PHP String Manipulation Operations ===\n\n";

// 1. STRING LENGTH using strlen()
echo "1. STRING LENGTH using strlen()\n";
echo "   String: '$sampleString'\n";
echo "   Length: " . strlen($sampleString) . " characters\n";
echo "   Email: '$email'\n";
echo "   Length: " . strlen($email) . " characters\n\n";

// 2. REVERSE STRING using strrev()
echo "2. REVERSE STRING using strrev()\n";
echo "   Original: '$sampleString'\n";
echo "   Reversed: '" . strrev($sampleString) . "'\n";
echo "   Original: '$sentence'\n";
echo "   Reversed: '" . strrev($sentence) . "'\n\n";

// 3. EXTRACT SUBSTRING using substr()
echo "3. EXTRACT SUBSTRING using substr()\n";
echo "   String: '$sampleString'\n";
echo "   substr(string, 0, 5): '" . substr($sampleString, 0, 5) . "'\n";
echo "   substr(string, 6): '" . substr($sampleString, 6) . "'\n";
echo "   substr(string, -5): '" . substr($sampleString, -5) . "'\n";
echo "   substr(string, 1, 4): '" . substr($sampleString, 1, 4) . "'\n\n";

// Additional string operations
echo "4. ADDITIONAL STRING OPERATIONS\n";

// String to Uppercase
echo "   strtoupper(): '" . strtoupper($sampleString) . "'\n";

// String to Lowercase
echo "   strtolower(): '" . strtolower($sampleString) . "'\n";

// Find position of substring
echo "   strpos('$sampleString', 'World'): " . strpos($sampleString, "World") . "\n";

// Replace substring
echo "   str_replace('World', 'PHP', '$sampleString'): '" . str_replace("World", "PHP", $sampleString) . "'\n";

// String trim
echo "   trim('  Hello  '): '" . trim("  Hello  ") . "'\n";

// Character at specific position
echo "   $sampleString[0]: '" . $sampleString[0] . "'\n";
echo "   $sampleString[6]: '" . $sampleString[6] . "'\n\n";

// Example with user input simulation
echo "=== EXAMPLE WITH USER INPUT ===\n";
$userInput = "Learning PHP Strings";
echo "User entered: '$userInput'\n";
echo "Length: " . strlen($userInput) . "\n";
echo "Reversed: '" . strrev($userInput) . "'\n";
echo "First 8 characters: '" . substr($userInput, 0, 8) . "'\n";
echo "Last 7 characters: '" . substr($userInput, -7) . "'\n";
?>
