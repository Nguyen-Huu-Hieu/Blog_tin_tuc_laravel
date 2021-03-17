<h1>
ket qua
</h1>

@if(count($nghiem) == 0) 
    <h2>phuong trinh vo nghiem</h2>
@elseif(count($nghiem) == 1) 
    <h2>phuong trinh co nghiem kep: {{ $nghiem[0] }}</h2>
@else
    <h2>phuong trinh co nghiem thu 1: {{ $nghiem[0] }}</h2>
    <h2>phuong trinh co nghiem thu 2: {{ $nghiem[1] }}</h2>
@endif
