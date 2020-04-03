# Arabic To Roman Numbers

## basic idea
- enter Arabic number (0, 1, 2 ... 9, ... 999999) and get Roman equivalent (no zero, I've heard, I, II, ... IX ...)

## implementation
- numbers above 1000 are supported, in contrast with many other convertor sites
- associative array that matches all Roman symbols and strange cases to (standard) Arabic input
- class does all the work. All steps are done in the class. In index.php this class is only instantiated and the method call to get output start the whole machinery
- floor function to prevent errors from decimal (5.5 e.g.) input

## to do's 
- unit tests, basically the way it was meant to be done
- handle spaces
- handle points and comma's, make a choice which one for readability and which one for decimals


# original assignment below

- test-driven development

