<?php
# Movable Type (r) (C) 2001-2013 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id$

function smarty_block_mtcommenteriftrusted($args, $content, &$ctx, &$repeat) {
    require_once('block.mtifcommentertrusted.php');
    return smarty_block_mtifcommentertrusted($args, $content, $ctx, $repeat);
}
?>
