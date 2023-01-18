
# Tailwind Buttons

This package provides you with a set of components of different styled buttons.


## Authors

- [@TobiasNagel01](https://github.com/TobiasNagel01)
## Installation

To install this package run

```bash
  composer require tobiasnagel01/tailwind-buttons
```


## Parameters

*All following parameters can be added to all buttons.*

**Text:**
```html
<x-button::blue text="TestButton">
```
*You can also put your own HTML Content inside this slot, for example to add a loading Spinner instead of text*\s\s

**Route:**
```html
<x-button::blue route="users.create">
```

**Link:** *(This will be ignored when a route is provided)*
```html
<x-button::blue link="/users/create/">
```
## Variants

Normal:
```html
<x-button::blue>
<x-button::green>
<x-button::red>
<x-button::yellow>
<x-button::purple>
<x-button::dark>
```

Rounded:
```html
<x-button::rounded.blue>
    <x-button::rounded.green>
        <x-button::rounded.red>
            <x-button::rounded.yellow>
                <x-button::rounded.purple>
                    <x-button::rounded.dark>
```

Outline:
```html
<x-button::outline.blue>
<x-button::outline.green>
<x-button::outline.red>
<x-button::outline.yellow>
<x-button::outline.purple>
<x-button::outline.dark>
```

