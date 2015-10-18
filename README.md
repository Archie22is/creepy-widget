# creepy-widget
A quick widget generator... 

## What's in here?
- Just a quick and dirty example of what a widget generator will look like. 

## Where can I use this quick and dirty example?
- for an online email signature generator
- to generate widgets for non-developers

## Demo please
A really dirty and simple example is available here: http://labs.aatsol.co.za/creepy-widget

## What's the secret?
No secret. It uses HTML embed object snippet which is better than an iFrame. Here is the source code: 

```html
<object data=http://www.drivesouthafrica.co.za/child-visa-checklist/ width="650" height="500"> 
	<embed src=http://www.drivesouthafrica.co.za/child-visa-checklist/ width="650" height="500"> </embed>
	<a href="http://www.drivesouthafrica.co.za" target="_blank">Powered by Drive South Africa</a>
</object>
```
