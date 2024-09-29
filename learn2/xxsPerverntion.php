<!-- Cross-Site Scripting (XSS) is a type of attack where malicious scripts are injected into a web application to steal user data, hijack sessions, or perform other harmful actions. Here are some effective techniques to prevent XSS:

1. Input Validation and Sanitization:

Validate user input: Use PHP's built-in functions like filter_var() to validate data types and remove potentially harmful characters.
Sanitize output: Properly encode HTML special characters using htmlspecialchars() or htmlentities() before displaying user-generated content.
2. Output Encoding:

Encode HTML: Always encode HTML special characters (e.g., <, >, &, ", ') in output to prevent malicious scripts from being executed.
Encode JavaScript: If you're dynamically generating JavaScript code, ensure it's properly encoded to prevent XSS within JavaScript.
3. Content Security Policy (CSP):

Implement CSP headers to define trusted sources for scripts, stylesheets, and other resources. This helps prevent the execution of untrusted content.
4. Contextual Output Encoding:

Encode output based on the context where it will be displayed. For example, encode data differently for HTML, JavaScript, or CSS.
5. Regular Expression Validation:

Use regular expressions to validate input against specific patterns, such as email addresses or phone numbers.
6. Avoid Dynamic Code Inclusion:

Minimize the use of dynamic code inclusion (e.g., include, require) based on user input, as it can introduce vulnerabilities.
7. Use a Web Application Firewall (WAF):

A WAF can help detect and block XSS attacks by analyzing incoming requests for malicious patterns. -->

<?php
// Input validation
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);

// Output encoding
echo "<p>Hello, " . htmlspecialchars($name) . "</p>";
?>