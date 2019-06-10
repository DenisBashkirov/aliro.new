<h2>Поступила заявка с сайта</h2>

Название завки: <b>{{ $data['capture_form_name'] }}</b><br>
@if(isset($data['period']))
    Указан желаемый срок кредита: <b>{{ $data['period'] }}</b><br>
@endif
Имя клиента: <b>{{ $data['name'] }}</b><br>
Телефон клиента: <b>{{ $data['phone'] }}</b>