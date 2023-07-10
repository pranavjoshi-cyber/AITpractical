<?php
$sourceFile = "E:\Imcc lms\Sem2\AIT Lab\Assignment1\source_file.txt";
$destinationFile = "E:\Imcc lms\Sem2\AIT Lab\Assignment1\destination_file.txt";

// Read the content from the source file
$content = file_get_contents($sourceFile);

// Write the content to the destination file
file_put_contents($destinationFile, $content);

echo "Content has been copied from '$sourceFile' to '$destinationFile'.";
?>
