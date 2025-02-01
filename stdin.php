<?php
if (posix_isatty(STDIN)) {                                                                                                                             
    echo "STDIN is a TTY\n";
} else {
    echo "STDIN is not a TTY\n";
}

// while ($line = fgets(STDIN)) {
//     echo "Received: " . trim($line) . "\n";
// }
