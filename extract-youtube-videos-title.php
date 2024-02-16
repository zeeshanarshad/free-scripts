<?php
/*
If you want to extract all your youtube channel videos on single page with its Title then use this script.

1. Simply go to VIDEO tab of your channel
2. Scroll down manually until end of your channel
3. Select all your video titles by selecting your first video until last video through scrolling
4. Copy / paste all your selected data into the variable = $inputList
5. Run this PHP file to get your EXTRACTED TITLES on screen to use as an index of your video library

*/


// Your input list
$inputList = "
1:53
NOW PLAYING
Return of the Legend (Official Trailer)
235 views
3 years ago


2:35
NOW PLAYING
Spiritual Lights (Official Trailer)
99 views
3 years ago


2:26
NOW PLAYING
Spiritual Lights for Curing Diseases | Practical Demonstration | Spiritual Smoke
48 views
3 years ago
";

// Split the input into lines
$lines = preg_split('/\R/', $inputList);

// Iterate through the lines and extract the title
$titles = array();
foreach ($lines as $index => $line) {
    // Use regular expression to match the title pattern
    if (strpos($line, 'NOW PLAYING') !== false && isset($lines[$index + 1])) {
        $titles[] = $lines[$index + 1] . '<br>';
    }
}

// Output the extracted titles
foreach ($titles as $title) {
    echo trim($title) . PHP_EOL;
}
?>
