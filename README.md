# PHP Loose Comparison Bug

This repository demonstrates a common, yet subtle, bug in PHP related to loose comparison using the `==` operator.  The example highlights the unexpected behavior when comparing strings and integers, particularly when the string represents '0'.

The `bug.php` file contains code that showcases the issue. The `bugSolution.php` file offers a corrected version using strict comparison (`===`).

**Key Learning:** Always prefer strict comparison (`===`) in PHP to avoid unexpected type coercion and ensure reliable conditional logic.