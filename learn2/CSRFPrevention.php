<!-- Cross-Site Request Forgery (CSRF) is an attack where a malicious website tricks a user into performing an unwanted action on a trusted site. Here are some techniques to prevent CSRF:

1. Synchronizer Token Pattern (STP):

Generate a unique, unpredictable token and store it in the user's session.
Include the token in hidden fields or as a query parameter in HTML forms.
Verify the token on the server-side before processing the request. If the token doesn't match, reject the request.
2. Double Submit Cookie:

Generate a random value and store it as a cookie on the user's device.
Include the same value as a hidden field in the form.
Verify that the cookie and hidden field values match on the server-side before processing the request.
3. Check HTTP Referer Header:

Check the HTTP_REFERER header to ensure that the request originated from a trusted source. However, this method is not entirely reliable as the HTTP_REFERER header can be modified or omitted.
4. Additional Measures:

Use HTTPS to protect communication between the client and server.
Regularly update your application and dependencies to address known vulnerabilities.
Educate users about the risks of clicking on suspicious links or downloading attachments from unknown sources. -->

<?php
// Generate a random token
$token = bin2hex(random_bytes(32));

// Store the token in the session
$_SESSION['csrf_token'] = $token;

// Include the token in the form
echo "<form method='post' action='process_form.php'>
    <input type='hidden' name='csrf_token' value='$token'>
    <button type='submit'>Submit</button>
</form>";

?>