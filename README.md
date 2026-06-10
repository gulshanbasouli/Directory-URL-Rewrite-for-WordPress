# Directory URL Rewrite for WordPress

A lightweight WordPress plugin that creates SEO-friendly URLs using WordPress Rewrite API.

This plugin allows dynamic URLs such as:

```
https://example.com/details/John/Smith/
```

and automatically maps them to a WordPress page while passing the values as query variables.

---

## Features

* SEO-friendly URLs
* WordPress Rewrite API integration
* Custom query variables support
* Plugin activation/deactivation hooks
* Lightweight and fast
* No database tables required

---

## Example

Incoming URL:

```
https://example.com/details/John/Smith/
```

Internally rewritten to:

```
https://example.com/index.php?page_id=177&firstName=John&lastName=Smith
```

You can then access these values inside your template:

```php
$firstName = get_query_var('firstName');
$lastName  = get_query_var('lastName');
```

---

## Installation

### Method 1 - Upload Plugin

1. Download the plugin files.
2. Upload the plugin folder to:

```
/wp-content/plugins/
```

3. Login to WordPress Admin.
4. Navigate to:

```
Plugins → Installed Plugins
```

5. Activate the plugin.

---

## Permalink Configuration

After activation:

1. Go to:

```
Settings → Permalinks
```

2. Click:

```
Save Changes
```

This will refresh WordPress rewrite rules.

---

## How It Works

The plugin registers:

### Rewrite Tags

```php
%firstName%
%lastName%
```

### Rewrite Rule

```php
details/{firstName}/{lastName}/
```

Example:

```text
/details/John/Smith/
```

The values are automatically passed to WordPress and can be used within your page template.

---

## Using Query Variables

Inside your page template:

```php
$firstName = get_query_var('firstName');
$lastName  = get_query_var('lastName');

echo $firstName;
echo $lastName;
```

Output:

```text
John
Smith
```

---

## Customization

### Change Target Page

Current rewrite target:

```php
index.php?page_id=177
```

You can replace it with another page:

```php
index.php?page_id=250
```

or use a page slug:

```php
index.php?pagename=directory-profile
```

---

### Change URL Structure

Current structure:

```text
/details/John/Smith/
```

You can modify it to:

```text
/profile/John/Smith/
```

by updating the rewrite rule.

---

## Use Cases

* Business Directories
* Member Profiles
* Staff Directories
* Doctor Listings
* Real Estate Agents
* Service Providers
* Custom Search Result Pages
* Dynamic Landing Pages

---

## Requirements

* WordPress 5.0+
* PHP 7.4+
* Pretty Permalinks Enabled

---

## Changelog

### Version 1.0.0

* Initial release
* Added custom rewrite tags
* Added SEO-friendly URL support
* Added activation/deactivation rewrite flushing

---

## Author

Gulshan Chauhan

Portfolio:
https://portfolio.perfectprofessionist.com/

GitHub:
https://github.com/gulshanbasouli

---

## License

GPL v2 or later
