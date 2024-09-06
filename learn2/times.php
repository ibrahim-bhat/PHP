<?php
// Here are the topics extracted from the second list:

// 1. PHP mktime & gmmktime Functions

// mktime(): Gets the Unix timestamp for a date.
// Example:
echo mktime(0, 0, 0, 1, 1, 2024); // Output: Unix timestamp for January 1, 2024

// gmmktime(): Gets the Unix timestamp for a date, using GMT.
// Example:
echo gmmktime(0, 0, 0, 1, 1, 2024); // Output: Unix timestamp for January 1, 2024, in GMT


// 2. PHP date_create & date_format Functions

// date_create(): Creates a new DateTime object.
// Example:
$date = date_create('2024-01-01');
echo date_format($date, 'Y-m-d'); // Output: "2024-01-01"

// date_format(): Formats a DateTime object.
// Example:
$date = date_create('2024-01-01');
echo date_format($date, 'Y-m-d'); // Output: "2024-01-01"


// 3. PHP checkdate & date_diff Functions

// checkdate(): Validates a Gregorian date.
// Example:
echo checkdate(2, 29, 2024) ? 'Valid' : 'Invalid'; // Output: "Valid"

// date_diff(): Computes the difference between two dates.
// Example:
$date1 = date_create('2024-01-01');
$date2 = date_create('2024-12-31');
$diff = date_diff($date1, $date2);
echo $diff->format('%R%a days'); // Output: "+364 days"


// 4. PHP date_add, date_sub & date_modify Functions

// date_add(): Adds an interval to a DateTime object.
// Example:
$date = date_create('2024-01-01');
date_add($date, date_interval_create_from_date_string('10 days'));
echo date_format($date, 'Y-m-d'); // Output: "2024-01-11"

// date_sub(): Subtracts an interval from a DateTime object.
// Example:
$date = date_create('2024-01-01');
date_sub($date, date_interval_create_from_date_string('10 days'));
echo date_format($date, 'Y-m-d'); // Output: "2023-12-22"

// date_modify(): Modifies a DateTime object.
// Example:
$date = date_create('2024-01-01');
date_modify($date, '+1 month');
echo date_format($date, 'Y-m-d'); // Output: "2024-02-01"


// 5. PHP getdate, localtime, gettimeofday Functions

// getdate(): Gets an associative array with date information.
// Example:
print_r(getdate()); // Output: Array with current date information

// localtime(): Gets an array with the local time.
// Example:
print_r(localtime()); // Output: Array with current local time

// gettimeofday(): Gets the current time.
// Example:
print_r(gettimeofday()); // Output: Array with current time information


// 6. PHP date_parse Function

// date_parse(): Returns an associative array with detailed information about a date.
// Example:
print_r(date_parse('2024-01-01 12:30:00')); // Output: Array with parsed date information


// 7. PHP strtotime, strftime, gmstrftime Functions

// strtotime(): Parses an English textual datetime into a Unix timestamp.
// Example:
echo strtotime('next Monday'); // Output: Unix timestamp for the next Monday

// strftime(): Formats a local time/date according to locale settings.
// Example:
echo strftime('%B %d, %Y'); // Output: "January 01, 2024" (depends on locale)

// gmstrftime(): Formats a GMT/UTC time/date according to locale settings.
// Example:
echo gmstrftime('%B %d, %Y'); // Output: "January 01, 2024" (depends on locale)


// 8. PHP date_time_set Function

// date_time_set(): Sets the time on a DateTime object.
// Example:
$date = date_create('2024-01-01');
date_time_set($date, 14, 30);
echo date_format($date, 'Y-m-d H:i:s'); // Output: "2024-01-01 14:30:00"


// 9. PHP TimeZone Functions

// PHP provides several functions to work with time zones, such as:
// date_default_timezone_set(): Sets the default timezone.
// Example:
date_default_timezone_set('UTC');
echo date('Y-m-d H:i:s'); // Output: Current date and time in UTC

// timezone_open(): Creates a new DateTimeZone object.
// Example:
$tz = timezone_open('Asia/Kolkata');
print_r($tz); // Output: DateTimeZone object

// timezone_name_from_abbr(): Returns the timezone name from an abbreviation.
// Example:
echo timezone_name_from_abbr('IST'); // Output: "Asia/Kolkata" (depends on abbreviation)

?>