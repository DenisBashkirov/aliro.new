<!-- Alloka calltracking -->
<!--
<script type="text/javascript">


    var _alloka = {
        objects: {
            '8bb4fcddc027d48e': {
                block_class: 'phone_alloka',
                jivosite: false,
                email: false,
                format: '8 (#{XXX}) #{XXX}-#{XX}-#{XX}'
            }
        },
        trackable_source_types:  ["type_in", "referrer", "utm"],
        last_source: false,
        use_geo: true
    };
</script>
<script src="https://analytics.alloka.ru/v4/alloka.js" type="text/javascript"></script>

<script src="https://analytics.alloka.ru/integrations/catch_form.js" type="text/javascript"></script>-->


<!-- Calltracking.ru -->
<script type="text/javascript">
    (function ct_load_script() {
        var ct = document.createElement('script'); ct.type = 'text/javascript';
        ct.src = document.location.protocol+'//cc.calltracking.ru/phone.e09e8.8577.async.js?nc='+Math.floor(new Date().getTime()/300000);
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ct, s);
    })();
</script>


<!-- Mango Office -->
<script>
    (function(w, d, u, i, o, s, p) {
        if (d.getElementById(i)) { return; } w['MangoObject'] = o;
        w[o] = w[o] || function() { (w[o].q = w[o].q || []).push(arguments) }; w[o].u = u; w[o].t = 1 * new Date();
        s = d.createElement('script'); s.async = 1; s.id = i; s.src = u;
        p = d.getElementsByTagName('script')[0]; p.parentNode.insertBefore(s, p);
    }(window, document, '//widgets.mango-office.ru/widgets/mango.js', 'mango-js', 'mgo'));
    mgo({calltracking: {id: 18761, elements: [{"selector":".mango-number"}]}});
</script>