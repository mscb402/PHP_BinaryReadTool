# PHP_BinaryReadTool
A simple binary quickly check tool writing in PHP 
# Usage

```
php rbyte.php [filename] [start] [length] [type]

-filename : filename you want to open
-start    : offset
-lenth    : how many byte you want to print
-type     : [int|string] type convert 
```
# Example #1

```
$ php ./rbyte.php star.bin 0 25 string
Hex: 
  =============================
  01 02 03 04 05 06 07 08 09 10
  -----------------------------
  00 00 60 82 51 B0 12 00 55 53 
  01 3B E2 BE 58 01 00 1D 00 43 
  25 1E 2C 46 69 
  =============================
string
  `?Q?US;?XC%,Fi
```

# Example #2

```
$ php ./rbyte.php star.bin 0 8 int
Hex: 
  =============================
  01 02 03 04 05 06 07 08 09 10
  -----------------------------
  00 00 60 82 51 B0 12 00 
  =============================
int
  106112832508416
```

# Example #3

```
$ php ./rbyte.php star.bin 0 8 int,string
Hex: 
  =============================
  01 02 03 04 05 06 07 08 09 10
  -----------------------------
  00 00 60 82 51 B0 12 00 
  =============================
int
  106112832508416
string
  `?Q?
```
