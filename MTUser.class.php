<?php
class MTUser {
  var $properties;
  function __construct($cookie) {
    if ($_COOKIE[$cookie]) {
      $props = explode(";",$_COOKIE[$cookie]);
      //echo "<p>cookie: ".$_COOKIE[$cookie]."</p>";
      foreach ($props as $prop) {
	preg_match("/^([^:]*):\\\'(.*)\\\'$/", $prop, $regs);
	list($orig,$key,$val) = $regs;
	if (preg_match("/(is_|can_)/", $key)) {
	  $val = ($val == "1" ? 1 : 0);
	}
	$this->properties[$key] = $val;
      } 
    }
  }
  function userpic()    { return $this->properties['userpic']; }
  function name()       { return stripslashes($this->properties['name']); }
  function email()      { return $this->properties['email']; }
  function session_id() { return $this->properties['sid']; }

  function is_authenticated() { return $this->properties['is_authenticated']; }
  function is_trusted()       { return $this->properties['is_trusted']; }
  function is_author()        { return $this->properties['is_author']; }
  function is_banned()        { return $this->properties['is_banned']; }

  function can_post()    { return $this->properties['can_post']; }
  function can_comment() { return $this->properties['can_comment']; }
}
?>
