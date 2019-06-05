<script>
    var ymapRetail;

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
        ymapRetail.behaviors.disable('drag');
    }
</script>