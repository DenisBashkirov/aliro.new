<script>
    var ymapProduction;

    // Дождёмся загрузки API и готовности DOM.
    ymaps.ready(init);

    function init () {
        ymapProduction = new ymaps.Map('ymap_production', {
            // При инициализации карты обязательно нужно указать
            // её центр и коэффициент масштабирования.
            center: [44.982987, 38.890090],
            zoom: 14
        }, {
            searchControlProvider: 'yandex#search'
        });

        ymapProduction.geoObjects.add(new ymaps.Placemark([44.982987, 38.890090], {
            //balloonContent: 'цвет <strong>красный</strong>',
            iconCaption: 'завод "Индустрия Окон"'
        }, {
            preset: 'islands#redDotIcon'
        }));

        ymapProduction.behaviors.disable('scrollZoom');
        //ymapProduction.behaviors.disable('drag');
    }
</script>