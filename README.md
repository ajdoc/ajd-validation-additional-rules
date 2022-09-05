# AJD Validation additonal rules

Additional Rules for AJD validation

## Description

Additional Rules for AJD validation

## Getting Started

### Installing
* `composer require ajd/ajd-validation-additional-rules`

* after installing add the package to AJD validation as shown by the example below
```php
use AJD_validation\AJD_validation;

$v->addPackages([
	AjdRespect\AjdAdditionalRulesServiceProvider::class
]);
```
* adding package is usally done in the bootsraping of your application
* after adding the package you have now access to the additional rules provided by this package.

## Documentation
* [Rules](docs/rules/)

## Authors
Contributors names and contact info
Aj Doc (thedoctorisin17@gmail.com)  

## Version History

* 0.1 (master)
    * Initial Release


## Links
* See also:
	- [AJD validation](https://github.com/ajdoc/ajd-validation)
	