#PiTemp Server

This part of the [PiTemp](https://github.com/fechu/PiTemp) project is used to support [Pushover](http://pushover.net) notifications.

With this small webapplication you don't have to distribute your application key of Pushover within the source of [PiTemp](https://github.com/fechu/PiTemp). 

##Installation

If you don't want to use our instance of the server provided with your PiTemp installation you can easily setup your own webapplication to support Pushover notifications. You only need a webserver supporting PHP (with cURL).

Just clone this repository to your webserver root. With apache it would look like this:

	git clone https://github.com/fechu/PiTemp-Server.git
	
The only thing you need to do is supply your Pushover Application key. Go to [Pushover](http://pushover.net) sign up or login and create an application. Once you got your application key copy the config.php file. 

	cp config.php local.config.php
	
This step is optional. But this makes it easy for you to update PiTemp Server with a `git pull`. The file `local.config.php` will be merged with `config.php`. `local.config.php` overwrites the values from `config.php`.

Insert your Pushover application key next to the `pushover_token` key in the `local.config.php`. 

To setup PiTemp to use your server instead of ours, look over the `config.php` file in [PiTemp](https://github.com/fechu/PiTemp) and overwrite the URL with your own URL that points to the `pushover.php` file in the root directory of PiTemp Server.

##Todo

- Add script to test notifications


##License

The MIT License (MIT)

Copyright (c) 2013 Sandro Meier

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.