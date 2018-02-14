/*
Property:

bubbles - returns if an event is a bubbling event
cancelable - returns if the event can have its default action prevented
currentTarget - returns the element whose event listeners triggered the event
defaultPrevented - returns if the preventDefault() method is called for the event
eventPhase - returns which phase of the event flow is currently being evaluated
isTrusted - returns if a event is trusted or not
target - returs the elemet that triggered the event
timeStamp - returns the time at which the event was created
type - returs the name of the event
view - returns a reference to the Window object where the event ocurred


Methods:

initEvent() - specifies the event type
preventDefault() - cancels the event if it is cancelable
stopImmediatePropagation() - prevents other listeners of the same event from being called
stopPropagation() - prevents further propagation of an event during its flow


Type:

Mouse Events - click, contextmenu (right-clicks), mousemove...
Keyboard Events - keydown, keypress (represents a character), keyup
Form Events - blur, change, focus...
...

***EXAMPLES ARE IN THE events.html FILE***
*/