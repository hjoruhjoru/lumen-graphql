# json-helpers

[![Build Status](https://travis-ci.org/digiaonline/json-helpers.svg?branch=master)](https://travis-ci.org/digiaonline/json-helpers)

Exception-based wrappers for json_encode and json_decode

## Requirements

* PHP >= 7.0

## Installation

```bash
composer require digiaonline/json-helpers
```

## Usage

### Encoding

```php
<?php

$data = [
    'foo' => 'bar'  
];

try {
    $json = \Digia\JsonHelpers\JsonEncoder::encode($data);    
}
catch (\InvalidArgumentException $e) {
    
}
```

### Decoding

```php
<?php

$json = '["foo":"bar"]';

try {
    $data = \Digia\JsonHelpers\JsonDecoder::decode($data);    
}
catch (\InvalidArgumentException $e) {
    
}
```

## License

MIT
