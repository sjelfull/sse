# SSE plugin for Craft CMS

SSE is utility set for using Server Sent Events with Craft.

![Icon](resources/icon.png)

SSE is perfect when you only need one-way communication from the server. Some examples:

- Checking if a user is online
- Pushing the latest notifications
- Showing a site-wide message from the site administrator saying the site will be going down for upgrades in _x_ minutes

[Read more about SSE at Mozilla Developer Network](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events)

## Installation

To install SSE, follow these steps:

1. Download & unzip the file and place the `sse` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `sse` for Craft to see it.

SSE works on Craft 2.4.x and Craft 2.5.x.

## Using SSE

```javascript
<script>
    var sse = new EventSource("{{ actionUrl('SSE/index') }}");
    sse.addEventListener('update',function(e){
        var data = e.data;
        //handle your data here
    },false);
</script>
```

## SSE Roadmap

* Make it useful

Brought to you by [Superbig](https://superbig.co)
