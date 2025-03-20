## 4.0.2 (2025-03-19)

## 4.0.1 (2024-12-01)

### Fix

- **RouteParamMap**: decode path variables

## 4.0.0 (2024-12-01)

### BREAKING CHANGE

- `ContainerLoader` must now be explicitly used before starting the application.
- `composer require phpolar/core` instead of `phpolar/phpolar-core`
- Load has been changed to an instance method.

### Feat

- upgrade psr/http-message to 2.0
- **Formats**: move formats to core
- add http response extensions library
- initial commit

### Fix

- **composer**: upgrade dependencies
- exclude unnecessary files from dist
- exclude unnecessary files from dist
- add link to api docs
- use stable phpolar/http-response-extensions
- **FormControlTypes.php**: move out of core

### Refactor

- move classes out of core
- change name of repo
- **ContainerLoader**: remove static method
- move classes to core

## 3.0.0 (2023-07-03)

### BREAKING CHANGE

- `ContainerLoader` must now be explicitly used before starting the application.
- `composer require phpolar/core` instead of `phpolar/phpolar-core`

### Refactor

- move classes out of core
- change name of repo

## 2.2.0 (2023-04-29)

### Feat

- upgrade psr/http-message to 2.0

## 2.1.0 (2023-03-30)

### Feat

- **Formats**: move formats to core

## 2.0.0 (2023-03-28)

### BREAKING CHANGE

- Load has been changed to an instance method.

### Refactor

- **ContainerLoader**: remove static method

## 1.0.0 (2023-03-28)

### Refactor

- move classes to core

## 0.2.4 (2023-02-12)

### Fix

- exclude unnecessary files from dist

## 0.2.3 (2023-02-12)

### Fix

- exclude unnecessary files from dist

## 0.2.2 (2023-02-11)

### Fix

- add link to api docs

## 0.2.1 (2023-02-01)

### Fix

- use stable phpolar/http-response-extensions

## 0.2.0 (2023-02-01)

### Feat

- add http response extensions library

### Fix

- **FormControlTypes.php**: move out of core

## 0.1.0 (2023-01-29)

### Feat

- initial commit
