## What is write ?

It is used to write the specified content to the specified file. It is created if the file and directory in question does not exist, returning true if the operation was successful, false otherwise. takes three parameters;

First parameter:

It represents the content and can be sent as `string` or `array`. If sent as an array, the array elements are written to the file as `string` by adding the `:` symbol between them.

Second parameter:

It represents the file path, if there is a file, the data in question is appended to the end of the file, if there is no file, a file with the specified name in the path is created and written to this file.

Third parameter:

Represents the value to be used to separate data specified as an array. It is not required to be specified, by default `:` is defined.

**data:**
```php
$str = 'Hello world';
// $str = array('Hello', 'world');
```

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
echo $m::aliyilmaz('write')->write($str, 'new.txt');
// echo $m::aliyilmaz('write')->write($str, 'new.txt', '~');
```

**When using it in the class:**

code:
```php
echo self::aliyilmaz('write')->write($str, 'new.txt');
// echo self::aliyilmaz('write')->write($str, 'new.txt', '~');
```

output:
```php
Hello world
```

---

### Dependencies
1. [info 1.0.0](https://github.com/aliyilmaz/info)

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/write/blob/main/LICENSE) license.