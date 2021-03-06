# Install

## Requirements

- Node.js
- Composer
- A compatible code editor (VS Code, Atom)
- Git
- A way to host a wordpress site locally

## Steps to begin

1. Take a copy of this code and copy it into a folder outside of the Wordpress installation (be sure to copy all the hidden dotfiles excluding .git folder)
2. Use search and replace to change all placeholders as laid out below. When it's done, the table below should act as a helpful reference guide should you need it.
3. Copy the `.env.example` file to `.env` and then set the plugin_folder variable to point the plugin folder in your local WordPress install (it will create one later if it doesn't exist).
4. Run `npm install` and `composer install` to install all the npm and composer dependencies.
5. Update dependencies as required using `update` and `outdated` commands for both npm and composer. (be careful of breaking changes)
6. Perform code editor setup, instructions below.
7. Start a git repository for your plugin.

## Placeholders

%%PLUGIN_NAME%% - Sentence case plugin name (presentational).
%%PLUGIN_NAME_SLUG%% - all lowercase plugin name, should match plugin folder name.
%%PLUGIN_NAMESPACE%% - Plugin name with no spaces and in camel case for namespaces.
%%AUTHOR%% - Plugin author name (visible in plugin info)
%%AUTHOR_SLUG%% - Currently only used for composer name.
%%AUTHOR_URL%% - Web address of plugin author (visible in plugin info)
%%AUTHOR_EMAIL%% - email address of plugin author (visible in plugin info)
%%MIN_WP_VERSION%% - The minimum support wordpress version for this build (usually the most recent version unless specifically required)
%%MIN_PHP_VERSION%% - The minimum PHP version for this build (usually the most recent stable version unless specifically required)

## Code editor setup

### VS Code:

First, Find the file named "phpstan-vscode.neon" in "src". When you have found that, copy it to "phpstan.neon". NOTE: The phpstan.neon file will not be commited to your repo, so be sure to leave the other editor files alone in case you need to restore it later. Also, other developers may use different code editors so they will need the files you don't need.

Secondly, there is a folder of recommended extensions. You should have a dialog pop up to install / enable these, but if not, or you already dismissed it, go to the extensions tab, filter by Recommended and you should see the workspace recommendations there with an install all button. There is also some workspace setting in that folder, which will automatically set the correct settings for these extensions.

### Atom (UNTESTED)

First, Find the file named "phpstan-atom.neon". When you have found that, copy it to "phpstan.neon". NOTE: The phpstan.neon file will not be commited to your repo, so be sure to leave the other editor files alone in case you need to restore it later. Also, other developers may use different code editors so they will need the files you don't need.

Secondly, install the following plugins to improve your editing experience:
-editorconfig
-atom-linter-phpstan
-linter-phpcs
-atom-beautify

### Other editors

This is not currently set up for other editors. If you want to have another editor supported, please submit a pull request with the following considerations:

- Should show linting errors for ESLint, PHPStan, PHPCS and Stylelint using the code editors normal error display method.
- Should allow automatic formatting on type/save using Prettier, Stylelint and PHPCBF.
- Must follow the settings set out using .editorconfig
