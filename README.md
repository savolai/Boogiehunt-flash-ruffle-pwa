# Boogiehunt-flash-ruffle-pwa
https://savolai.net/case-studies/apps/the-great-boogie-hunt/

A demo of converting a legacy Flash game to a Progressive Web App with manifest and web worker

This is an SWF file from 2003 that's been made modern browser webassembly compatible using Ruffle, and then into a PWA using pwabuilder.

Particular features include asking user to turn the phone if forced landscape mode is not working (an issue on iphone), and smooth CSS transitions for the rotating.

There is also a service working so it should be possible to get this to add to home screen. Also if there is a prompt on the platform to suggest the user to do that, I suppose this will do that too.
