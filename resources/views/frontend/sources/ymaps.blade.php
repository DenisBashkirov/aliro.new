<script>
    var ymapRetail;
    var ymapProduction;

    // Дождёмся загрузки API и готовности DOM.
    ymaps.ready(init);

    function init () {
        ymapRetail = new ymaps.Map('ymap_retail', {
            // При инициализации карты обязательно нужно указать
            // её центр и коэффициент масштабирования.
            center: [45.042158, 38.941447],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        });

        ymapRetail.geoObjects.add(new ymaps.Placemark([45.042158, 38.941447], {
            //balloonContent: 'цвет <strong>красный</strong>',
            iconCaption: 'Салон окон "Алиро"'
        }, {
            preset: 'islands#redDotIcon'
        }));

        ymapRetail.behaviors.disable('scrollZoom');
        //ymapRetail.behaviors.disable('drag');


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