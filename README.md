This PHP library provides a simple interface for decoding a Movable Type commenter/user cookie. Once decoded you can perform simple tests and extract specific information about a user from the cookie.

The intention is for this class to be distributed with your plugin by placing it within your plugin's static web path. It can then be included by your templates just like any other PHP file.

## Usage

    <?php
    include_once('<$mt:StaticWebPath$>plugins/MyPlugin/php/MTUser.class.php');
    $user = new MTUser('<$mt:UserSessionCookieName$>');
    if ($user->is_authenticated()) {
    ?>
    LOGGED IN!
    <? } else { ?>
    NOT logged in.
    <?
    }
    ?>

## Methods

### `userpic`

Return the fully qualified URL to the current user's userpic, if they have one.

### `name`

Returns the display name of the current user.

### `email`

Returns the email address of the current user.

### `session_id`

Returns the Movable Type session ID of the current user. This is also referred to as the "magic token."

### `is_authenticated`

Returns true if the current user is authenticated.

### `is_trusted`

Returns true if the current user is trusted.

### `is_author`

Returns true if the current user is an author on the current blog.

### `is_banned`

Returns true if the current user is banned on the current blog.

### `can_post`

Returns true if the current user has permission to create entries on the current blog.

### `can_comment`

Returns true if the current user has permission to create/post comments on the current blog.

# Support

For questions using this software please visit: http://endevver.tenderapp.com/

# License

This code is distributed under same terms as Perl itself.

# Copyright

(c) 2009-2010 Endevver, LLC.