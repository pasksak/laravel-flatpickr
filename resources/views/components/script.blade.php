<script src="{{ $url ?? config('flatpickr.js_url') ?? asset('vendor/flatpickr/js/flatpickr.js') }}"></script>

{{-- check /resources/to-be-minified/ folder for not minified scripts --}}
<script>
    window.LaravelFlatpickr={__supportedEventNames:["onChange","onOpen","onClose","onMonthChange","onYearChange","onReady","onValueUpdate","onDayCreate"],initializeFlatpickr:function(a){flatpickr(document.getElementById(a.getAttribute("data-selector-id")),this.__config(a))},__config:function(a){let b=JSON.parse(a.getAttribute("data-config"));return"1"===a.getAttribute("data-disable-weekend")&&b.disable.push(this.__disableWeekends()),{...b,...this.__events(a)}},__disableWeekends:function(){return function(a){return 0===a.getDay()||6===a.getDay()}},__events:function(el){let elEvents;return el.getAttributeNames().filter(a=>a.startsWith("on")).reduce((obj,elEventName)=>{let eventName=this.__supportedEventNames.find(a=>a.toLowerCase()===elEventName);return eventName&&(obj[eventName]=function(...params){eval(el.getAttribute(eventName))(...params)}),obj},{})}},document.addEventListener("DOMContentLoaded",function(a){document.querySelectorAll(".flatpickr-input").forEach(a=>window.LaravelFlatpickr.initializeFlatpickr(a))});var observer=new MutationObserver(a=>{a.forEach(a=>{a.removedNodes.length>0&&window.LaravelFlatpickr.initializeFlatpickr(a.previousSibling)})});document.querySelectorAll(".flatpickr-container").forEach(a=>{observer.observe(a,{childList:!0})})
</script>
