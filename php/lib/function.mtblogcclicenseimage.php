<?php
# Movable Type (r) (C) 2001-2013 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id$

function smarty_function_mtblogcclicenseimage($args, &$ctx) {
    // status: complete
    // parameters: none
    $blog = $ctx->stash('blog');
    $cc = $blog->blog_cc_license;
    if (empty($cc)) return '';
    if (preg_match('/(\S+) (\S+) (\S+)/', $cc, $matches))
        return $matches[3];  # the third element is the image
    return 'http://creativecommons.org/images/public/' .
        ($cc == 'pd' ? 'norights' : 'somerights');
}
?>
