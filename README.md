KCAPTCHA Version 2.0 - A Port for CodeIgniter
=============================================

Installation
------------

Download this package and uncompress it within `application/` directory of your CodeIgniter site.
Then activate Session library/driver. GD image processing PHP module should be installed.

This feature has been tested on CodeIgniter 3.1.11 (September 19th, 2019).

A Quick Test
------------

Open with browser the following URL:

http://localhost/site/index.php/captcha_test

or

http://localhost/site/captcha_test (if you removed the URL-segment index.php).

Usage
-----

Examine code of the controller Captcha_test.php and the views captcha_test.php and captcha_test_ok.php.
This would be enough for you to get the idea how captcha feature works.

A Screenshot
------------

![KCAPTCHA Test](https://raw.github.com/ivantcholakov/codeigniter-kcaptcha/master/LOOKATME.png)

Live Demo
---------

http://iridadesign.com/starter-public-edition-4/www/playground/captcha

License Information
-------------------

Copyright by Kruglov Sergei, 2006, 2007, 2008, 2011  
http://www.captcha.ru  
http://www.kruglov.ru  

KCAPTCHA is a free software. You can freely use it for developing own site or software.
If you use this software as a part of own sofware, you must leave copyright notices intact or add KCAPTCHA copyright notices to own.
As a default configuration, KCAPTCHA has a small credits text at bottom of CAPTCHA image.
You can remove it, but I would be pleased if you left it. ;)

Ported for CodeIgniter by Ivan Tcholakov, 2013-2020.  
The demonstration code is under the MIT License, http://opensource.org/licenses/MIT
