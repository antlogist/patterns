# Singleton

The Singleton pattern guarantees that the class has only one instance. Also, it provides access to a global variable. It’s good to use for designing the class providing access to app settings. It is pointless to have many instances of the settings class. Another variant of the Singleton use is providing database connection. We want to access the object of this connection from any point of our app. But the DB connection is only one.

The operator New of OOP programming always creates a new instance. It calls the constructor. But the constructor is triggered after the creation of an object.

> In class-based object-oriented programming, a constructor is a special type of subroutine called to create an object. It prepares the new object for use, often accepting arguments that the constructor uses to set required member variables.
> *Wikipedia*

```php

class NotSingleton {
  public $data;

  public function __construct() {
    $this->data = rand();
  }

}

$randOne = new NotSingleton;
$randTwo = new NotSingleton;

echo $randOne->data; //2127469487
echo "<br>";
echo $randTwo->data; //360893861

```
The example above is not a Singleton. It can create different instances. The other question becomes how to get the only instance of the class. We can create a private constructor and get fatal error.

> Members declared as private may only be accessed by the class that defines the member.
> *php.net*

```php

class NotSingleton {
  public $data;

  private function __construct() {
    $this->data = rand();
  }

}

$randOne = new NotSingleton;
$randTwo = new NotSingleton;

echo $randOne->data;
echo "<br>";
echo $randTwo->data;

//Fatal error

```

Then the question becomes how to restrict the possibility of new object creation. This fatal error doesn’t mean that we can’t call a private constructor. We can call it only from the same class method. To do that, we need to use static methods. At the same time, the static method should be a public one.

> Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. These can also be accessed statically within an instantiated class object.
> *php.net*

We check using the public static method if we didn’t create the instance before, then create one. And if vice versa, then make an object reference.

```php

class Singleton {
  public $data;

  private function __construct() {
    $this->data = rand();
  }

  private static $instance = null;
  public static function getInstance() {
    if(is_null(self::$instance)) {
      self::$instance = new self;
    }

    return self::$instance;

  }

}

$randOne = Singleton::getInstance();
$randTwo = Singleton::getInstance();

echo $randOne->data; //568650922
echo "<br>";
echo $randTwo->data; //568650922

```

The getInstance method checks if the private static property is null. If it is, it calls the private constructor, saves and returns the object reference.
Now we can’t use operator new and have to use static method call. Also, we should call empty magic methods __clone and __wakeup to prevent new instance creation. It is the specificity of the language PHP.

```php

class Singleton {
  public $data;

  private function __construct() {
    $this->data = rand();
  }

  private static $instance = null;
  public static function getInstance() {
    if(is_null(self::$instance)) {
      self::$instance = new self;
    }

    return self::$instance;

  }

  private function __clone() {}
  private function __wakeup() {}

}

$randOne = Singleton::getInstance();
$randTwo = Singleton::getInstance();

echo $randOne->data; //568650922
echo "<br>";
echo $randTwo->data; //568650922

```