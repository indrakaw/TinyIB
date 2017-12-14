<?php
# WapBlog.ID Remote Upload
# This script will frequenly upload all media into WapBlog.ID as media hosting.
#
# IDEA: 
# You're on -very limited- shared hosting that only has:
# 100 MB disk, and 1 GB montly bandwidth. No mysql database neither.
#
# How to run:
#   Just access http://yoursite/path/to/TinyIB/exec/wapblog.upload.php
# Or run frequenly as cron job:
#   /usr/local/bin/php /home/user/public_html/path/to/TinyIB/exec/wapblog.upload.php >/dev/null 2>&1
#
# Be sure to sign-up an account on WapBlog.ID, then edit wapblog.settings.php

// WIP