Try Ninja Demo
=====================

View it on WordPress: (http://wordpress.org/plugins/try-ninja-demo/)

Intended for use with [Ninja Demo](http://ninjademo.com/), this simple plugin adds a new widget that automatically outputs the demo entry form and allows you to specify the text to display based on whether or not a user is inside of the demo.

### Installation
---

1. Upload `try-ninja-demo` to the `/wp-content/plugins/` directory
2. Network Activate the plugin through the Network Admin 'Plugins' menu in WordPress
3. Visit the dashboard -> Appearance -> Widgets page to use the "Try Ninja Demo" widget.

### Frequently Asked Questions
---

Create a new [issue](https://github.com/sdavis2702/try-ninja-demo/issues) if your question is not answered below.

##### Do I have to use Ninja Demo to use this plugin?

Yes. This plugin will not create the widget if Ninja Demo is not activated.

##### What does "Network Activate" mean in the installation instructions?

Ninja Demo runs on WordPress Multisite in a network configuration. Each demo user actually creates their own instance of the main network site every time they log into the demo. By network activating this plugin, you make it available to each [demo] site in the network.

##### How do I output the demo entry form?

All you have to do is use the widget. When the user is not inside of the demo, the entry form will display just below the content you place in the widget. When the user is inside of the demo, your previous content and entry form will both be replaced by the content you place in the widget for users who are inside of the demo.

##### Can I style the widget?

Certainly. Use the following CSS classes.

* `.try-ninja-demo-widget` - Wraps the entire widget output
* `.tnd-widget` - Wraps all content below the widget title
* `.tnd-widget-content` - Wraps all content you place inside of either textarea
* `.tnd-not-in-demo` - Wraps only the content that displays if the user is not in the demo
* `.tnd-in-demo` - Wraps only the content that displays if the user is in the demo
* `.nd-start-demo` - (Ninja Demo) Wraps the form question and submit

### Screenshots

##### The widget:
---

![The Widget](http://buildwpyourself.com/wp-content/uploads/edd/2014/05/tnd-widget.png)

##### Widget output when not in demo:
---

![Widget output not in demo](http://buildwpyourself.com/wp-content/uploads/edd/2014/05/tnd-not-in-demo.png)

##### Widget output when in demo:
---

![Widget output in demo](http://buildwpyourself.com/wp-content/uploads/edd/2014/05/tnd-in-demo.png)

### Bugs and Contributions
---

If you notice any mistakes, feel free to fork the repo and submit a pull request with your corrections. The same is true of any features you feel should be added or changes that can be made. 

### License
---

This plugin, like WordPress, is licensed under the GPL. Do what you want with it. I seriously don't care. 

### Developer
---

I'm Sean. I created the [Volatyl Framework](http://volatylthemes.com) for WordPress. I like to do most of my WordPress stuff on [Build WordPress Yourself](http://buildwpyourself.com/). I also write stuff on my [personal site](http://seandavis.co) and [SDavis Media](http://sdavismedia.com). Follow me on the [Twitter](http://sdvs.me/twitter) machine.

Meanwhile, tell me... is this plugin useful to you? If so, consider buying me a box of "Tazo: Awake - English Breakfast Black Tea." I need ALL the energiez. Thanks. [Donate Black Tea](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=52HQDSEUA542S)
